<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        if(session()->has('username')){
            return redirect()->back();
        }
        else
            return view('backend.login')->with('title', 'Login');
    }

    public function verify(Request $request)
    {
        //return $request;
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ],
        ['email.required' => 'Email is Required!',
         'password.required' => 'Password is Required!',
        ]
    );

    $email = $request->email;
    $password = $request->password;

    $user = User::where('email', '=', $email)->first();
    if (!$user) {
        $request->session()->flash('msg', 'Login Fail, Invalid Email address or password!!!');
        return redirect('/login');
    }
    if (!Hash::check($password, $user->password)) {
        $request->session()->flash('msg', 'Login Fail, Invalid Email address or password!!!');
        return redirect('/login');
    }
    $request->session()->put('username', $user->username);
    $request->session()->put('id', $user->id);
    return redirect('/dashboard');
    }
}
