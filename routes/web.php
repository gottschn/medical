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

/*Route::get('/', function () {
    return view('pages.index');
})->name('inicio');*/

Route::get('/cefmedical' , function(){
    return view('pages.nosotros');
})->name('aboutus');

Route::get('/preCredito' , function(){
    return view('pages.preCredito');
})->name('preCredito');

Route::get('/redPrestadores' , function(){
    return view('pages.redPrestadores');
})->name('redPrestadores');

Route::get('/pacientes' , function(){
    return view('pages.pacientes');
})->name('pacientes');

Route::get('/terminos' , function(){
    return view('pages.terminos');
})->name('terminos');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/* Rutas Agregadas */





/* Google Login */
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

/* Facebook Login */
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
