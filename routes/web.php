<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();






Route::get('/home', 'Home\HomeController@index')->name('home');
Route::get('/admin/login', 'Admin\AdminController@index')->name('admin');
Route::post('/admin/login', 'Auth\Admin\AdminLoginController@login')->name('admin.login');
Route::post('/home','Auth\User\UserLoginController@login')->name('user.login');
Route::post('/register','Auth\User\UserRegisterController@register')->name('user.register');

Route::get('/register',function (){
    return view('user/register');
})->name('register');

Route::get('/home',function (){
    return view('home');
})->name('login');

Route::middleware('admin')->group(function () {
    Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
        Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');
        Route::get('/datatable','AdminController@datatable')->name('datatable');
        Route::get('/users','AdminController@users')->name('users');
        Route::get('/update/{id}','AdminController@updateShow')->name('admin.show.update');
        Route::put('/edit/{id}','AdminController@edit')->name('admin.edit');
        Route::get('/delete/{id}','AdminController@delete')->name('admin.delete');
    });
});
Route::middleware('user')->group(function () {
    Route::group(['prefix' => 'user','namespace' => 'User'], function () {
        Route::get('/dashboard','UserController@dashboard')->name('user.dashboard');

    });
});


