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
Route::get('/activate/{token}','Auth\User\UserRegisterController@activateUser')->name('activate.user');

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

        Route::group(['prefix' => 'user','namespace' => 'User'], function () {
            Route::get('/users','UserController@index')->name('admin.user.users');
            Route::get('/update/{id}','UserController@getUser')->name('admin.user.update');
            Route::put('/edit/{id}','UserController@edit')->name('admin.user.edit');
            Route::get('/delete/{id}','UserController@delete')->name('admin.user.delete');

        });

    });
});

Route::middleware('user')->group(function () {
    Route::group(['prefix' => 'user','namespace' => 'User'], function () {
        Route::get('/dashboard','UserController@dashboard')->name('user.dashboard');
        Route::group(['prefix' => 'homes','namespace' => 'Home'], function () {
            Route::get('/','HomeController@index')->name('user.home.homes');
            Route::get('/create','HomeController@create')->name('user.home.create');
            Route::post('/store','HomeController@store')->name('user.home.store');

            Route::get('/home/{id}','HomeController@home')->name('user.home.view');
            Route::get('/update/{id}','HomeController@update')->name('user.home.update');
            Route::get('/delete/{id}','HomeController@delete')->name('user.home.delete');
        });
        Route::group(['prefix' => 'family','namespace' => 'Family'], function () {
            Route::get('/','FamilyController@index')->name('user.family.peoples');
            Route::get('/create','FamilyController@create')->name('user.people.create');
            Route::post('/store','FamilyController@store')->name('user.peoaple.store');

            Route::get('/people/{id}','FamilyController@people')->name('family.people.view');
            Route::get('/update/{id}','FamilyController@update')->name('family.people.update');
            Route::get('/delete/{id}','FamilyController@delete')->name('family.people.delete');
        });
    });
});


