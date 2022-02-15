<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * 
     */
    public function index()
    {
        return view('login');
    }

    public function store() {

        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } else{
            if(auth()->user()->role=='admin'){
                    return redirect()->route('admin.index');
                } else {
                    return redirect()->to('/resources/views/home.blade.php');
                }
                
            }
        }

    public function destroy() {
        auth()->logout();
        
        return redirect()->to('/resources/views/auth/login.blade.php');
    }
}
