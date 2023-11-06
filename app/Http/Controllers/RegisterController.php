<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:25', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => 'required|min:6|max:16',
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        Auth::login($user);
        return redirect('/dashboard');
    }
}
