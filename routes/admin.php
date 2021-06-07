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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('mohd',function(){
   return 'awad';
});

route::get('saleh/{id?}',function(){
    return 'moohd';
});
route::get('awad/{id}',function($id){
    return 'ere';
});

route::group(['namespace'=>'front'],function(){
   route::get('my','UserController@getMyName');
    route::get('sis','UserController@getSisName');
    route::get('mom','UserController@getMomName');
});
route::group(['prefix'=>'mohd'],function(){
    route::get('id','front\UserController@getId');
    route::get('age','front\UserController@getAge');
    route::get('name','front\UserController@getName');
});
route::get('admin','front\UserController@getView');
route::resource('res','ResourceController');
