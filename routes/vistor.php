<?php
/**
 * Created by PhpStorm.
 * User: obadvic
 * Date: 7/20/2018
 * Time: 1:13 AM
 */

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
