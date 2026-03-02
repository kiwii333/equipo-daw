<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SingupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function signupForm(): View
    {
        return view('auth.singup');
    }

    public function signup(SingupRequest $request): RedirectResponse
    {
        $user= new User();
        $user-> username = $request ->get('username');
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        Auth::login($user);

        return redirect()->route('users.account');

    }
    public function loginForm()
    {
        if (Auth::viaRemember()){
            return redirect()->route('users.account',['msg'=>'Bienvenido de nuevo']);
        } elseif (Auth::check()){
            return redirect()->route('users.account');
        }else {
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username','password');
        dd($credentials);
        if(Auth::guard('web')->attempt($credentials)){
            $request->sesion()->regenerate();
            return redirect()->route('user.account');
        }else {
            $error = 'Error al acceder a la aplicación';
            return view('auth.login',compact('error'));
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
