<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

//Route::get('/',  fn() => view('welcome'));

// 下記はvue-Laravel用
Route::get('/{any}', fn() => view('app'))->where('any', '.*');

// 下記はLaravel入門用

// Laravel8から以下の書き方に変更となった
// Route::get('hello', 'HelloController@index');

// Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello/other', [HelloController::class, 'other']);
// Route::get('hello', [HelloController::class, '__invoke']);
