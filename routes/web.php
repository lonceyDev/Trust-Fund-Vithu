<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('layouts.front.index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('.env', function () {
    return abort(403);
});

Route::get('.htaccess', function () {
    return abort(403);
});

//Route::get('/', HomeController::class,'index')->name('home');
//Route::get('/contact-us', ContactComponent::class)->name('contact');

Route::get('/blog', function () {
    return redirect()->route('blogs.category');
});


Route::prefix('about')->name('about.')->group(function () {
    Route::view('/about-us', 'about.about-us')->name('about-us');
    Route::view('/about-our-logo', 'about.logo')->name('logo');
    Route::view('/patron', 'about.patron')->name('patron');
    Route::view('/history', 'about.history')->name('history');
    Route::view('/our-journery', 'about.journey')->name('journey');
    Route::view('/awards', 'about.award')->name('awards');
});
