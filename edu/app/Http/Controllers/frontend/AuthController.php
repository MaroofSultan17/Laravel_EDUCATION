<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AuthModel;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }
    public function signup()
    {
        return view('frontend.signup');
    }
    public function register(Request $request)
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
        $User = new AuthModel();
        $MAXID = $User->max('id');
        $User->id = $MAXID + 1;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
        $User->securepassword = $SecurePassword;
        $User->token = $TokenKey;
        if ($User->save()) {
            return redirect()->route('flogin.show')->with('success', 'Congratulations Your Account is Ready!');
        } else {
            return back()->with('error', 'Something is Wrong');
        }
    }

    public function login_auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $securepassword = md5($request->password);
        // dd($request);
        $User = AuthModel::where('email', $request->email)
            ->where('securepassword', $securepassword)
            ->first();
        if ($User) {
            session()->put('email', $User->email);
            session()->put('token', $User->token);
            return redirect()->route('home.show');
        } else {
            return redirect()->route('flogin.show')->with('error', 'Email/Password is Incorrect!');
        }
    }

    public function google_login()
    {
        return Socialite::driver('google')->redirect();
    }
    public function google_regirect()
    {
        // echo "this is calling";
        // dd();
        try {
            $User = Socialite::driver('google')->user();
            dd($User);
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['error' => 'An error occurred during Google login.']);
        }

        // try {
        //     $User = Socialite::driver('google')->user();
        //     dd($User);
        //     $is_user = AuthModel::where('email', $User->getEmail())->first();
        //     if (!$is_user) {
        //         $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
        //         $TokenKey = str_shuffle($TokenKey);
        //         $TokenKey = substr($TokenKey, 0, 32);
        //         $reg_user = new AuthModel();
        //         $MAXID = $reg_user->max('id');
        //         $reg_user->id = $MAXID + 1;
        //         $reg_user->google_id = $User->getId();
        //         $reg_user->email = $User->getEmail();
        //         $reg_user->password = $User->getName() . "@" . $User->getId();
        //         $reg_user->securepassword = md5($User->getName() . "@" . $User->getId());
        //         $reg_user->token = $TokenKey;
        //         $reg_user->save();
        //         echo"it is in registering";
        //         dd();
        //         // $reg_user = AuthModel::where('google_id', $User->getId());
        //     } else {
        //         $is_user = AuthModel::where('email', $User->getEmail())->first();
        //     }
        //     Auth::loginUsingId($is_user->id);
        //     return redirect()->route('home.show');
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
    }
    public function logout()
    {
        session()->flush();
        session()->invalidate();
        return redirect()->route('home.show');
    }
}
