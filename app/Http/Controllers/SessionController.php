<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function create()
    {
        return  view('login.create');
    }

    public function store()
    {
        $attr = request()->validate([
            'email' => ['required', 'min:3', 'max:255', 'email'],
            'password' => ['required', 'min:3', 'max:255'],
        ]);

        if (Auth::attempt($attr)) {
            return redirect('/')->with('message', 'Welcome back.');
        } else {
            return back()->withErrors(['email' => 'Username or password is wrong.']);
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Successfully logged out.');
    }
}
