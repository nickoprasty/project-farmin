<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $user = DB::table('user')->where('username', $request->username)->first();
        
        if ($user) {
            
            if ($user->password === hash('sha256', $request->password)) {
                
                DB::table('user')->where('id_user', $user->id_user)
                    ->update(['password' => Hash::make($request->password)]);
                
                // Login user
                Session::put('username', $user->username);
                Session::put('id_user', $user->id_user);
                Session::put('role', $user->role);
                Session::put('is_login', true);
                
                if ($user->role == 'admin') {
                    return redirect('/dashboard');
                } else {
                    return redirect('/user_dashboard');
                }
            }
          
            elseif (Hash::check($request->password, $user->password)) {
                Session::put('username', $user->username);
                Session::put('id_user', $user->id_user);
                Session::put('role', $user->role);
                Session::put('is_login', true);
                
                if ($user->role == 'admin') {
                    return redirect('/dashboard');
                } else {
                    return redirect('/user_dashboard');
                }
            } 
            else {
                return back()->with('error', 'Username atau password salah!');
            }
        } else {
            return back()->with('error', 'Username atau password salah!');
        }
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:user,email',
            'username' => 'required|unique:user,username',
            'password' => 'required|min:4'
        ]);

        DB::table('user')->insert([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat, silakan login!');
    }

    public function logout(Request $request) {
        Session::flush();
        return redirect('/login');
    }
}
