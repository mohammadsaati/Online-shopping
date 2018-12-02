<?php

//use Illuminate\Support\Facades\Route;



Auth::routes();
Route::resource('product' , 'productcontroller')->middleware('web');

Route::get('/' , 'homecontroller@index')->name('index')->middleware('web');
Route::get('/home' , 'homecontroller@home')->name('home')->middleware('auth');

Route::get('/shops' , 'ShopController@showshop')->name('shop.show');
Route::get('/shop/create' , 'ShopController@show')->name('shop.create')->middleware('auth');
Route::get('/shop/save' , 'ShopController@create')->name('shop.save')->middleware('auth');
Route::get('/shoper/{shop_id}' , 'ShopController@shoper')->name('shoper.show');
Route::get('/shop/{shop_id}/edit' , 'ShopController@edit')->name('shop.edit')->middleware('auth');
Route::get('/shop/{shop_id}/update' , 'ShopController@update')->name('shop.update')->middleware('auth');
Route::get('/shop/{shop_id}/delete' , 'ShopController@delete')->name('shop.delete')->middleware('auth');


Route::get('/products' , 'productcontroller@showproduct')->name('product.show');
Route::get('/product/{shop_id}/create' , 'productcontroller@create')->name('product.create');
Route::get('/product/{shop_id}/save' , 'productcontroller@save')->name('product.save');
Route::get('/productd/{product_id}' , 'ProductController@show')->name('product.onlyshow');
Route::get('/productd/{product_id}' , 'productcontroller@show')->name('product.onlyshow');

Route::get('/product/{product_id}/{user_id}/edit' , 'productcontroller@edit')->name('product.edit');
Route::get('/product/{product_id}/{user_id}/update' , 'productcontroller@update')->name('product.update');
Route::get('/product/{product_id}/{user_id}/delete' , 'productcontroller@delete')->name('product.delete');


Route::get('/{shop_id}/{shop_name}/photo' , 'PhotoController@create')->name('photo.create');
Route::post('/photo/{shop_id}/save' , 'PhotoController@save')->name('photo.save');

Route::get('/{product_id}/prophoto' , 'PresultController@create')->name('presult.create');
Route::post('/product/{product_id}/photo' , 'PresultController@save')->name('presult.save');