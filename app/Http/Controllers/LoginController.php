<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'hi';
        $view_name = getTheme() . '::auth.login';
        return view($view_name, $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password' => 'required'
        ]);

        if(auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/homepage');
        }
        return back()->with('loginError', 'Login Failed');

    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
