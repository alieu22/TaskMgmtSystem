<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.LandingPage'); // Defines a route for the root URL that renders the 'LandingPage' view
});

Auth::routes();
Route::get('/LandingPage', function () {  // Define a route for the 'LandingPage' URL, giving it the name 'LandingPage'
    return view('web.LandingPage');
})->name('LandingPage');

