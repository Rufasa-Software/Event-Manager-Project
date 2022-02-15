<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * 
     */
    public function index()
    {
        return view('register');
    }

    public function store() {

        this->validate(request(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'email'=> 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/resources/views/auth/login.blade.php');
    }
}
