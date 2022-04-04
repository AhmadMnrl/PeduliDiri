<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Alert;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }
     public function register()
    {
        return view('auth.register');
    }
    public function postregister(Request $request)
    {
        $request->validate([
            'nik' => 'required|max:16','unique:user',
            'username' => 'required',
            'nama' => 'required',
            'email' => 'required','unique:user',
            'password'=>'nullable|required|confirmed',
        ]);

        $user = User::create([
       'nik' => $request->nik,
       'username' => $request->username,
       'nama' => $request->nama,
       'email' => $request->email,
       'password' => bcrypt($request->password),
       'remember_token'=>str_random('60'),
       'role' => 'user'
    ]);
        Alert::success('Sukses', 'Berhasil membuat akun silahkan login!');
        return redirect('/signin')->with('message', 'Akun Berhasil Dibuat');;
    }
     public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
        return redirect('/dashboard');
        }
        return redirect('/signin');
    }
    public function logout()
    {
        Auth::logout();

        Alert::warning('Peringatan', 'Anda telah logout dari akun anda');
        return redirect('/signin');

    }

}
