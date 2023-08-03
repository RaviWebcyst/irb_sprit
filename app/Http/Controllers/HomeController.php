<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function loginform() {
        return view('adminlogin');
    }
    public function adminlogin_check(Request $request)
    {
        // dd($request->all);
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($input);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('home.index');
            } else {
                // exit;
                return redirect()->back()->with('error', 'Invalid User');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid User');
        }
    }

    public function userlogin_check(Request $request)
    {
        // dd($request->all);
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
         if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin != 1) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['email', 'password' => "Invalid User"]);
            }
        } else {
            return redirect()->back()->withErrors(['email', 'password' => "Invalid User"]);
        }
    }

}
