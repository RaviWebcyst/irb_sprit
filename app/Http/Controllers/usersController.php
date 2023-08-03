<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\downline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;


class usersController extends Controller
{

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
        if(count($udata)<1 || $lv  == 12){
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

    public function check_sponser(Request $request){
        $user = User::where("uid",$request->id)->first();
        if($user == null){
            return response()->json(["error"=>"Invalid sponser id"],500);
            exit;
        }
        $user_name = $user->name;
        return response()->json(compact('user_name'));
    }



}
