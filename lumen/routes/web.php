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
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    $todos = App\Todo::all();

    \Log::info('Lumen: ' . (microtime(true) - LUMEN_START));
    \Log::info(performance());

    return $todos;
});
