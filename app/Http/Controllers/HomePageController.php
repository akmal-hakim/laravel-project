<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $data['title'] = 'hi';
        $view_name = getTheme() . '::homepage.index';
        return view($view_name, $data);
    }
}
