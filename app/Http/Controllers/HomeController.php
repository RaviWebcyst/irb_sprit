<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\wallet;
use App\Models\downline;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function index()
    {
      	$users = User::where("spid",Auth::user()->uid)->count();
      	$teams = downline::where("tagsp",Auth::user()->uid)->count();
        $deposit_bal = $this->getBalance(Auth::user()->id,"usdt");
        return view('home',compact('users','teams','deposit_bal'));
    }

    public function loginform() {
        return view('adminlogin');
    }
    
    protected function getBalance($user_id,$wallet_type){
        $credit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","credit")->sum('amount');
        $debit = wallet::where("userId",$user_id)->where("wallet_type",$wallet_type)->where("type","debit")->sum('amount');

        $balance = $credit - $debit;
        return $balance;
    }


}
