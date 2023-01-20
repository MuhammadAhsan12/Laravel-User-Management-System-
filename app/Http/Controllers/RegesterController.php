<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegesterController extends Controller
{
    public function create()
    {
        return view('regester');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('/');
    }

}
