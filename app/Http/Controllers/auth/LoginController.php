<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
//Laravel
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//Model 
use App\Models\User;
//Auth
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    protected $guard;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

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

        /*     
            if(auth::attempt($credentials))
            {
                $this->guard = Auth::user()->role_id; //Check the role id of the users
                $request->session()->regenerate();

                if(Auth::user()->role_id == 1){ //For users
                    $this->guard = 'users';
                    return redirect()->intended('/');
                }
                else if(Auth::user()->role_id == 2){ //For admin
                    $this->guard = 'admin';
                    Auth::guard('admin');
                    return redirect()->intended('/admin/home2');
                }
                else{
                    return redirect()->intended('/');
                }
            }
        */

        if(auth::attempt($credentials))
        {
            $request->session()->regenerate();

            if(Auth::user()->role_id == 1){ //For users
                return redirect()->intended('/home');
            }
            else if(Auth::user()->role_id == 2){ //For admin
                return redirect()->intended('/admin/home');
            }
            else{
                return redirect()->intended('/');
            }

        }
        //return back()->with('loginError', 'Login Failed');
        return Redirect::back()->withErrors(['msg' => 'You have entered an invalid email or password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

  
}
