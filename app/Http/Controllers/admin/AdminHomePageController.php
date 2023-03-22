<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class AdminHomePageController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $username = Auth::user()->user_name;

        $data['username'] = $username;
        $data['title'] = 'Admin:Home';
        $view_name = getTheme() . '::admin.home';
        return view($view_name, $data);
    }
}
