<?php

use Illuminate\Support\Facades\Route;
use App\Model\Post;

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

Route::get('date', function(){
    $timestamp = strtotime('21-03-2020');
    $date = date("Y-m-d H:i:s", $timestamp);
    echo $date;
});

Route::get('posts', 'Post\PostController@index');