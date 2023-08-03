<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\downline;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
            'spid' => ['required', 'string'],
            'phone' => ['required','unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['spid'] == "admin")
        {
            return response()->json(['message'=>'Invalid Sponser!'], 500);
             exit;
        }


        $user = User::where("uid",$data['spid'])->first();
        $usr = User::where("email",$data['email'])->first();
        if(empty($user) ){
            return response()->json(['message'=>"Invaild User id"], 500);
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
    }

}
