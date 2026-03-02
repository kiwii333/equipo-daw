<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function account()
    {
        return view('users.account');
    }

    public function list()
    {
        $users = User::get();
        if(Auth::user()->rol !='admin')
            return redirected()->route('/');
        return view('users.list',compact('users'));
    }
}
