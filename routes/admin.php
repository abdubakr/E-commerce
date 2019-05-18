<?php
/**
 * Created by PhpStorm.
 * User: obadvic
 * Date: 7/20/2018
 * Time: 1:13 AM
 */
//Ajax
//user
Route::get('loadUserData','UserController@loadData')->name('admin.user.data');

//page
Route::get('loadPageData','PageController@loadData')->name('admin.page.data');

//slider
Route::get('loadSliderData','SliderController@loadData')->name('admin.slider.data');

//menu
Route::get('loadMenuData','MenuController@loadData')->name('admin.menu.data');

//Contact
Route::get('loadContactData','ContactController@loadData')->name('admin.contact.data');

//Ajax category
Route::get('/loadCategoryData','CategoryController@loadData')->name('admin.category.data');

//Ajax Brands
Route::get('/loadBrandData','BrandController@loadData')->name('admin.brand.data');

//Ajax Brands
Route::get('/loadBrandData','ProductController@loadData')->name('admin.product.data');
//load
Route::get('/','HomeController@index')->name('admin.home');


//setting
Route::get('/setting','SettingController@index')->name('setting.index');
Route::post('/setting','SettingController@update')->name('setting.update');

//user
Route::resource('/user','UserController');
Route::get('/user/{id}/delete','UserController@confirmation')->name('user.delete');
Route::PATCH('/user/{id}/password','UserController@password')->name('user.password');

//page
Route::resource('/page','PageController');
Route::get('/page/{id}/delete','PageController@confirmation')->name('page.delete');

//slider
Route::resource('/slider','SliderController');
Route::get('/slider/{id}/delete','SliderController@confirmation')->name('slider.delete');

//menu
Route::resource('/menu','MenuController');
Route::get('/menu/{id}/delete','MenuController@confirmation')->name('menu.delete');

//contact
Route::resource('/contact','ContactController',['only'=>['index','show','destory']]);
Route::get('/contact/{id}/delete','ContactController@confirmation')->name('contact.delete');


// category

Route::resource('/category','CategoryController');
Route::get('category/{id}/delete/','CategoryController@confirmation')->name('category.delete');

// brand

Route::resource('/brand','BrandController');
Route::get('brand/{id}/delete/','BrandController@confirmation')->name('brand.delete');

// product

Route::resource('/product','ProductController');
Route::get('product/{id}/delete/','ProductController@confirmation')->name('product.delete');



