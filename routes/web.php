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
//登録生徒の一覧
Route::get('/', 'App\Http\Controllers\StudentsController@index')->name('list');

//生徒登録画面の表示
Route::get('/entry', 'App\Http\Controllers\StudentsController@entry')->name('entry');
//生徒登録の処理
Route::post('/store', 'App\Http\Controllers\StudentsController@store');

//生徒編集画面の表示
Route::post('/edit', 'App\Http\Controllers\StudentsController@edit');
//生徒情報更新処理
Route::post('/update', 'App\Http\Controllers\StudentsController@update');


//論理削除の処理
Route::post('/delete', 'App\Http\Controllers\StudentsController@delete');
