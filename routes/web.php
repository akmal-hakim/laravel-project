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

#Route::get('/', [HomeController::class,'index']);
#Route::get('dashboard', 'DashboardController@index');
#Route::get('/login', 'RegisterController@index');
#Route::post('/login', 'LogInController@authenticate');

#LEARNING PROCESS :

/*Route::get('/logout', function () {
        #if (Auth::check()) {
            #flash(getPhrase('success'), getPhrase('logged_out_successfully.'), 'success');
        #}
        Auth::logout();
        return redirect(URL_LOGIN);
    });
*/

/*    Route::get('/', function () {
        Theme::set('theme');
        return view('welcome');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['prefix' => 'admin'], function () {

            Route::get('/admin/home2', 'admin\HomePageController@index')->middleware('auth');

    });
});

*/

Route::get('/', 'guest\HomeController@index');

Route::get('/register', 'auth\RegisterController@index');
Route::post('/register', 'auth\RegisterController@store');

Route::get('/login', 'auth\LoginController@index');
Route::post('login', [ 'as' => 'login', 'uses' => 'auth\LoginController@authenticate']);
Route::get('/logout', 'auth\LoginController@logout');


Route::middleware(['middleware' => 'is_Admin'])->group(function () {
    Route::get('/admin/home', 'admin\AdminHomePageController@index');
    Route::get('/admin/content/create', 'admin\CreateContentController@index');
    Route::post('/addContent', 'admin\CreateContentController@store');
    Route::get('/admin/content/list', 'admin\CreateContentController@list');
});

Route::middleware(['middleware' => 'is_User'])->group(function () {
    Route::get('/home', 'user\UserHomePageController@index');
});


