<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'this email or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/login');
    }

    public function get()
    {
        $user = User::all();
        // return $user;
        return view('home', ['users' => $user]);
    }
}
