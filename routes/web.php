<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('.env', function () {
//     return abort(403);
// });


Route::redirect('/login', '/admin/login', 301)->name('login');

Route::prefix('about')->name('about.')->group(function () {
    Route::view('/about-us', 'frontend.about.about-us')->name('about-us');
    Route::view('/about-our-logo', 'frontend.about.logo')->name('logo');
    Route::view('/patron', 'frontend.about.patron')->name('patron');
    Route::view('/history', 'frontend.about.history')->name('history');
    Route::view('/our-journery', 'frontend.about.journey')->name('journey');
    Route::view('/awards', 'frontend.about.award')->name('awards');
});

Route::view('/teaching-in-braille', 'frontend.sign.teaching-in-braille')->name('teaching-in-braille');
Route::view('/teaching-in-sign-language', 'frontend.sign.teaching-in-sign-language')->name('teaching-in-sign-language');
Route::view('/education-for-disabled', 'frontend.sign.education-for-disabled')->name('education-for-disabled');
Route::view('/education-for-children', 'frontend.sign.education-for-children')->name('education-for-children');

Route::view('/volunteering', 'frontend.get-involved.volunteering')->name('volunteering');
Route::view('/sponsorship', 'frontend.get-involved.sponsorship')->name('sponsorship');
Route::view('/our-pledge', 'frontend.get-involved.our-pledge')->name('our-pledge');
Route::view('/amazonsmile', 'frontend.get-involved.amazonsmile')->name('amazonsmile');

Route::view('/donations', 'frontend.donation.donation')->name('donation');

Route::get('/events',[App\Http\Controllers\EventController::class,'event'])->name('events');
Route::get('/events/{slug}',[App\Http\Controllers\EventController::class,'EventDetail'])->name('event-details');

Route::get('/projects/{status?}', [App\Http\Controllers\ProjectController::class, 'project'])->name('projects');
Route::get('/project-details/{slug}', [App\Http\Controllers\ProjectController::class, 'projectDetail'])->name('project-details');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts/mail', [App\Http\Controllers\ContactController::class, 'send_mail'])->name('contact.mail');

//explore tap
Route::get('/accounts', [App\Http\Controllers\AccountController::class, 'accChart'])->name('accounts');
Route::get('/pie', [App\Http\Controllers\AccountController::class, 'pieChart'])->name('accounts.pie');
Route::get('/bar', [App\Http\Controllers\AccountController::class, 'barChart'])->name('accounts.bar');
Route::get('/line', [App\Http\Controllers\AccountController::class, 'lineChart'])->name('accounts.line');

Route::get('/blogs',[App\Http\Controllers\BlogController::class,'blog'])->name('blogs');
Route::get('/blogs/{slug}',[App\Http\Controllers\BlogController::class,'blogDetail'])->name('blog-details');

Route::view('/our-partners','frontend.explore.our-partner')->name('our-parners');
