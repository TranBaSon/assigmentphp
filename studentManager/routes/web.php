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
use Illuminate\Support\Facades\Route;


Route::get('/',['as' => 'Admin',function(){
    return view('admin/index');
}]);

Route::get("/list","managerController@listStudent")->name("listStudent");

Route::get('/add','managerController@addStudent')->middleware('auth');
Route::post('/add','managerController@addStudent_post')->name('add');


Route::get('/home', 'HomeController@index')->name('home');
