<?php

namespace App\Http\Controllers\guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['title'] = 'hi';
        $view_name = getTheme() . '::guestHomePage';
        return view($view_name, $data);
    }

}
