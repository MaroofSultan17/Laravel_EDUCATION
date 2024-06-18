<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminAuthModel;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }
    public function login_auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $securepassword = md5($request->password);
        // dd($request);
        $Admin = AdminAuthModel::where('email', $request->email)
            ->where('securepassword', $securepassword)
            ->first();
        if ($Admin) {
            session()->put('email', $Admin->email);
            session()->put('token', $Admin->token);
            return redirect()->route('dashboard.show');
        } else {
            return redirect()->route('login.show')->with('error', 'Email/Password is Incorrect!');
        }
        // dd($request);
    }
    public function register()
    {
        return view('backend.register');
    }
    public function admin_register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required|min:8'
        ]);
        $SecurePassword = md5($request->password);
        $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
        $TokenKey = str_shuffle($TokenKey);
        $TokenKey = substr($TokenKey, 0, 32);
        // dd($request);
        $Admin = new AdminAuthModel();
        $MAXID = $Admin->max('id');
        $Admin->id = $MAXID + 1;
        $Admin->name = $request->name;
        $Admin->email = $request->email;
        $Admin->password = $request->password;
        $Admin->securepassword = $SecurePassword;
        $Admin->token = $TokenKey;
        if ($Admin->save()) {
            return redirect()->route('login.show')->with('success', 'Congratulations Your Account is Ready!');
        } else {
            return back()->with('error', 'Something is Wrong');
        }
    }
    public function signout()
    {
        session()->flush();
        return view('backend.login');
    }
}
