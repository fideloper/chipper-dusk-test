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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/test', function() {
    $cache = config('cache.default');
    $cache_host = config('database.redis.default.host');
    $database = config('database.default');
    $db_host = config('database.connections.mysql.host');
    return <<<ECHO
Cache: $cache<br>
Cache Host: $cache_host<br>
DB: $database<br>
DB Host: $db_host<br>
ECHO;

});

require __DIR__.'/auth.php';
