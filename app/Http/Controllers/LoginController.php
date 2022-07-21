<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{


    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $user = User::where('email', $data['email'])->where('password', $data['password'])->get()->first();
        if (is_null($user)) {
            $request->session()->put('flash', 'Email atau password salah');
            return redirect('/');
        } else {
            $request->session()->put('user', $user);
            // dd(session('user'));
            return redirect('/home');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function actionregister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_retype' => 'required'
        ]);
        // $validatedData['role'] = 'user';
        $cek = User::where('email', $validatedData['email'])->get()->first();
        if (!is_null($cek)) {
            // return view('/sudah');
            $request->session()->put('flash', 'Email sudah terdaftar');
            return redirect('/register');
        }
        $password = $validatedData['password'];
        $password_retype = $validatedData['password_retype'];
        if ($password != $password_retype) {
            $request->session()->put('flash', 'Kedua password tidak sama');
            return redirect('/register');
        }
        User::create($validatedData);
        $request->session()->put('success', 'Akun Terdaftar');
        return redirect('/');
    }

    public function actionlogout()
    {
        // Auth::logout();
        // return redirect('/');
    }
}
