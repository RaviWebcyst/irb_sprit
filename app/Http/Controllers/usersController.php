<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\downline;
use App\Models\package;
use App\Models\pack_active;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;

use Illuminate\Support\Facades\Validator;
use Auth;


class usersController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $data = $request->all();

        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
            'spid' => ['required', 'string'],
            'phone' => ['required','unique:users'],
        ]);

      
        $user = User::where("uid",$data['spid'])->first();
        $usr = User::where("email",$data['email'])->first();
        if($data['spid'] == "admin"  || $user == null)
        {
            return redirect()->back()->with("error","Invalid Sponser Id");
             exit;
        }

        $uid =  "AB".mt_rand(100000, 999999);

        $whilee = true;
        while($whilee == true){
            $user = User::where("uid",$uid)->first();
            $uid =  "AB".mt_rand(100000, 999999);
            if($user == null){
                $uid = $uid;
                $whilee = false;
                break;
                exit;
            }
        }

       

        // if(!empty($user) || !empty($usr)){
        //   return response()->json(['message'=>"User Already Exist"], 500);
        //     exit;
        // }

        
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->showPass = $data['password'];
        $user->spid = $data['spid'];
        // $user->phone = $request->phone;
        $user->uid =$uid;
        $user->save();

        
    $tagsp = $user->spid;
    $sppp = $user->spid;
    $user_id = $user->uid;
    $while = true;
    $lv = 1;

    while ($while == true) {
        $udata = User::where("uid",$tagsp)->where("is_admin","!=",1)->get();
        if(count($udata)<1 ){
            $while = false;
            break;
            exit;
        }
            downline::create([
                "tagsp"=>$tagsp,
                "user_id"=>$user_id,
                "spid"=>$sppp,
                "level"=>$lv
            ]);
            $userdata = $udata[0];
            $tagsp = $userdata['spid'];
            $lv++;
        }

        return redirect()->route('register.thankyou')->with(["data"=>$user]);
    }

    public function thankyou(){
        return view('user.thankyou');
    }
    
    public function profile(){
        return view('user.profile');
    }
    public function edit_profile(){
        return view('user.edit_profile');
    }
    public function password(){
        return view('user.change_pass');
    }

    public function invest(){
        $package = package::first();
        return view('user.topup_others',compact('package'));
    }

    public function store_invest(Request $request){
        $request->validate([
            'package' => 'required',
        ]);

       
        $user = Auth::user();
    
        $pack = package::where('id',$request->package)->first();
        
        $balance = $this->getBalance($user->id,"usdt");

        if($pack->amount > $balance){
            return redirect()->back()->with('error',"Insufficient Balance");
            exit;
        }

        // if($request->amount %100 != 0){
        //     return response()->json(['message'=>"Amount must be 100 or multiply of 100"],500);
        //     exit;
        // }

        $wallet = wallet::create([
            "amount" => $pack->amount,
            "package_id" => $pack->id,
            "user_id" => $user->uid,
            "userId" => $user->id,
            "wallet_type" => "usdt",
            "description" => "debit from buy package ".$pack->amount,
            "type"=>"debit",
            "transaction_type"=>'invest'
        ]);
        

        $package= new pack_active();
        $package->user_id= $user->id;
        $package->amount= $pack->amount;
        $package->package_id = $pack->id;
        $package->save();

        $user = User::where("id",$user->id)->first();
        // $user->package_amount = $request->amount;
        $user->enable = 1;
        $user->package = $pack->id;
        $user->paid_date = Carbon::now();
        $user->save();

        $data = DB::update("UPDATE `downlines` SET `investment`=`investment`+'".$request->amount."' WHERE `user_id`='".$user->uid."'");

        return redirect()->back()->with("success","Package activate successfully!");
    }

    public function invest_details(){
        $history= pack_active::join("packages","pack_actives.package_id","packages.id")->where("pack_actives.user_id",Auth::user()->id)->select('packages.*','pack_actives.*','pack_actives.amount as amount','pack_actives.created_at as created_at')->orderBy("pack_actives.id","desc")->paginate(50);
        return view('user.topup_users',compact('history'));
    }

   
    public function direct_list(){
        $user = Auth::user();
        $users = User::where("spid",$user->uid)->orderBy("id","desc")->paginate(50);
        return view('user.direct_list',compact('users'));
    }
    public function team_list(){
        $user = Auth::user();
        $users = downline::where("tagsp",$user->uid)->orderBy("level","asc")->paginate(50);
        $users->map(function($data){
            $data->user = User::where("uid",$data->user_id)->select("name")->first();
            return $data;
        });
        return view('user.team_list',compact('users'));
    }
    

    public function check_sponser(Request $request){
        $user = User::where("uid",$request->id)->first();
        if($user == null){
            return response()->json(["error"=>"Invalid sponser id"],500);
            exit;
        }
        $user_name = $user->name;
        return response()->json(compact('user_name'));
    }

    public function tickets(){
        return view('user.tickets');
    }
    public function create_ticket(){
        return view('user.create_ticket');
    }

    public function direct_bonus(){
        return view('user.direct_bonus');
    }
    public function wallet_details(){
        return view('user.wallet_details');
    }
    public function transactions(){
        return view('user.transactions');
    }

    public function withdraw_details(){
        return view('user.withdraw_details');
    }

    protected function getBalance($user_id,$wallet_type){
        $credit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","credit")->sum('amount');
        $debit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","debit")->sum('amount');

        $balance = round($credit - $debit,2);
        return $balance;
    }


}
