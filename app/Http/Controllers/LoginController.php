<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin/home');
        }else{
            return view('admin.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $user = Auth::User();
            Session::put('user', $user);

            return redirect('admin/home');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('admin');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('admin');
    }
}
