<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

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
    $nagai = 'start';
    for ($i = 0; $i < 99999999 ; $i++) {
                                                    $nagai .= 'あ';
    }
    Cache::put('test2', $nagai);
    return view( 'welcome' );
});

Route::get('/test', function () {
    $time_start = microtime(true);

    // 計測したい処理

    $temp = Cache::get('test2');
    $time = microtime(true) - $time_start;

    // dd(strlen($temp));
    dd("{$time} 秒");
    return view('welcome');
});
