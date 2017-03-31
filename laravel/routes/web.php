<?php

function performance()
{
    Log::debug('성능 요구량', [
        '메모리(MB) : ' . memory_get_usage() / 1000000,
        'CPU(%): ' . sys_getloadavg()[0],
    ]);
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    $todos = App\Todo::all();

    \Log::info('Laravel: ' . (microtime(true) - LARAVEL_START));
    \Log::info(performance());

    return $todos;
});
