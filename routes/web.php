<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/account', 'MembershipController@index')->name('account');
    Route::post('/membership/remove/{id}', 'MembershipController@destroy')->name('users.destroy');

    Route::get('/membership/addchild', 'MembershipController@create_child');
    Route::post('/membership/addchild', 'MembershipController@store');

    Route::get('/membership/addsenior', 'MembershipController@create_senior');
    
    Route::post('/membership/addplayer', 'MembershipController@store');

    Route::get('/account/edit/{id}', 'HomeController@userEdit')->name('account.edit');
    Route::get('/account/view/{id}', 'HomeController@userView')->name('account.view');


    //Route::patch('/membership/update/{id}','MembershipController@update');
    Route::resource('membership', 'MembershipController');

});

