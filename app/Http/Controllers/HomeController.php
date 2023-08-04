<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

        return view('home',compact('users','teams'));
    }

    public function loginform() {
        return view('adminlogin');
    }
    


}
