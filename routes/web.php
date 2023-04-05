<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::route('consumer.show');
}
);

Route::get('/consumer', [App\Http\Controllers\ConsumerController::class, 'showForm'])->name('consumer.show');
Route::post('/consumer', [App\Http\Controllers\ConsumerController::class, 'store'])->name('consumer.store');
Route::get('/consumer/keys', [App\Http\Controllers\ConsumerController::class, 'showKeys'])->name('consumer.keys');

