<?php


Route::get('/admin/dashboard', function(){
    return 'Welcome Admin!';
})->name('admin.dashboard');


Route::get('/admin/list', 'HomeController@adminList')->name('admin.list');
