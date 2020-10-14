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

// Route::match(['get','post'],'test', function (){
//     return ('test');
// });

//Route::match(['get','post'],'test', 'WelcomeController@index');
// Route::match(['get','post'],'user/{id?}', function ($id='test'){
//     return "用户ID: " . $id;
// })->where('id','[0-9]+');

Route::get('page/{name}', function ($name) {
    return '页面名称: ' . $name;
})->where('name', '[A-Za-z]+');

Route::get('page/{id}/{slug}', function ($id, $slug) {
    return $id . ':' . $slug;
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);

Route::get('user/{id?}', function ($id = 1) {
    return "用户ID: " . $id;
})->name('user.profile');
