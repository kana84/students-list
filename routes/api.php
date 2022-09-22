<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//生徒の一覧取得
Route::get('/list','App\Http\Controllers\ApiStudentsController@getStudentList');

//生徒の登録
Route::post('/student','App\Http\Controllers\ApiStudentsController@insertStudent');
