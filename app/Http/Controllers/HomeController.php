<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'hi';
        $view_name = getTheme() . '::welcome';
        return view($view_name, $data);
    }

}
