<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewLogin()
    {
        if (Auth::check()) {
            return redirect()->route('view.products');
        } else {
            return view('login');
        }
    }

    public function postLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($data)) {
            return view('products');
        } else {
            return redirect()->route('login');
        }
    }

    public function viewRegister()
    {
        if (Auth::check()) {
            return redirect()->route('view.products');
        } else {
            return view('register');
        }
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
        return redirect()->route('login');
    }

    public function Logout()
    {
        Auth::logout();
        return view('login');
    }
}
