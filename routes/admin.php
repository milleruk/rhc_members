<?php


Route::get('/admin/dashboard', function(){
    return 'Welcome Admin!';
})->name('admin.dashboard');


Route::get('/admin/list', 'HomeController@adminList')->name('admin.list');

Route::get('/admin/view/{id}', 'HomeController@adminView')->name('admin.detailed');
