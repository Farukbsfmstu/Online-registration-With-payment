<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
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



Route::get('/Slogin', function () {
    return view('Slogin');
});

Route::get('/payment', function () {
    return view('SSLCommerzService');
});

Route::get('/Registration',[siteController::class,'registration']);

Route::post('/Registration',[siteController::class,'Controller_registration'])->name('Form_fillup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
