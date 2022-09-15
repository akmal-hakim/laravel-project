<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  Route::get('/', [HomeController::class,'index']);
//  Route::get('dashboard', 'DashboardController@index');
    Route::get('/', 'HomeController@index');
    #Route::get('/login', 'RegisterController@index');

    Route::get('/register', 'RegisterController@index');
    Route::post('/register', 'RegisterController@store');

    Route::get('/login', 'LogInController@index')->middleware('guest');
    #Route::post('/login', 'LogInController@authenticate');
    Route::post('login', [ 'as' => 'login', 'uses' => 'LogInController@authenticate']);
    Route::get('/homepage', 'HomePageController@index')->middleware('auth');

    Route::post('/logout', 'LogInController@logout');
    /*Route::get('/logout', function () {
        #if (Auth::check()) {
            #flash(getPhrase('success'), getPhrase('logged_out_successfully.'), 'success');
        #}
        Auth::logout();

        return redirect(URL_LOGIN);
    });*/

/*    Route::get('/', function () {
        Theme::set('theme');
        return view('welcome');
    });
*/
