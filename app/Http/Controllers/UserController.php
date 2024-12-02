<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewLogin()
    {
        return view('login');
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password'
        ]);
        User::create($user);
        return redirect()->route('user.login');
    }
}
