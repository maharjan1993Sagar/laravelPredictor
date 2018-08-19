<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  php -S 127.0.0.1:8000 -t public -f serve.php
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/match', 'MatchController@index');
});


Route::middleware(['App\Http\Middleware\Admin'])->group(function () {



    Route::get('match/create', 'MatchController@create');

    Route:: post('/match', 'MatchController@store');

    Route::get('/match/{id}/edit', 'MatchController@edit')->name('matches.edit');

    Route::post('/match/{id}', 'MatchController@update')->name('matches.update');

    Route::get('/match/{id}/destroy', 'MatchController@destroy')->name('matches.destroy');

    Route::get('/user', 'UserController@index');

    Route::get('/user/{id}/assign', 'UserController@assign')->name('user.assign');

    Route::get('user/{id}/deny', 'UserController@deny')->name('user.deny');


    // Route::match([‘get’, ‘post’], ‘/adminOnlyPage/’, ‘HomeController@admin’);
//});
});

Route::middleware(['App\Http\Middleware\User'])->group(function () {

 //   Route::get('/match', 'MatchController@index');

    Route::get('/prediction', 'PredictionController@index');

    Route::get('/prediction/{id}/create', 'PredictionController@create')->name('prediction.create');

    Route::post('/prediction', 'PredictionController@store')->name('prediction.store');

    Route:: get('/prediction/{id}/edit', 'PredictionController@edit')->name('prediction.edit');

    Route::post('/prediction/{id}', 'PredictionController@update')->name('prediction.update');

    Route::get('/prediction/{id}/destroy', 'PredictionController@destroy')->name('prediction.destroy');


});



Route::get('/unauthorized','HomeController@unauthorized');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/DashboardAdmin', 'HomeController@admin')->name('DashboardAdmin');

Route::get('/DashboardUser', 'HomeController@user')->name('DashboardUser');


Route::get('/test','HomeController@test');

//Match Routes
//Route::get('/match', 'MatchController@index');

//Route::get('match/create','MatchController@create');
//
//Route:: post('/match','MatchController@store');
//
//Route::get('/match/{id}/edit','MatchController@edit')->name('matches.edit');
//
//Route::post('/match/{id}','MatchController@update')->name('matches.update');
//
//Route::get('/match/{id}/destroy','MatchController@destroy')->name('matches.destroy');

//Prediction Routes
//Route::get('/prediction','PredictionController@index');
//
//Route::get('/prediction/{id}/create','PredictionController@create')->name('prediction.create');
//
//Route::post('/prediction','PredictionController@store')->name('prediction.store');
//
//Route:: get('/prediction/{id}/edit','PredictionController@edit')->name('prediction.edit');
//
//Route::post('/prediction/{id}','PredictionController@update')->name('prediction.update');
//
//Route::get('/prediction/{id}/destroy','PredictionController@destroy')->name('prediction.destroy');


