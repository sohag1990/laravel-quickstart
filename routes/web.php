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
    return view('blog.index');
});
Route::get('post/{id}', function (){
   return view('blog.post');
});
Route::get('about', function (){
   return view('other.about');
});
Route::get('admin', function (){
    return view('admin.index');
});
Route::get('admin/create', function (){
    return view('admin.create');
});
Route::get('admin/edit/{id}', function (){
   return view('admin.edit');
});
