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

// Route::get('/blog', function () {
//     return redirect()->route('blogs.category');
// });


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

Route::view('/event', 'frontend.get-involved.event')->name('event');
Route::view('/volunteering', 'frontend.get-involved.volunteering')->name('volunteering');
Route::view('/sponsorship', 'frontend.get-involved.sponsorship')->name('sponsorship');
Route::view('/our-pledge', 'frontend.get-involved.our-pledge')->name('our-pledge');
Route::view('/amazonsmile', 'frontend.get-involved.amazonsmile')->name('amazonsmile');

Route::view('/donation', 'frontend.donation.donation')->name('donation');

Route::view('/contact', 'frontend.contact-us')->name('contact-us');
Route::view('/ongoing', 'frontend.projects.ongoing')->name('ongoing');
Route::view('/complete', 'frontend.projects.completed')->name('complete');

Route::get('/blog',[App\Http\Controllers\HomeController::class,'Blog'])->name('blog');
Route::get('/blog/{slug}',[App\Http\Controllers\HomeController::class,'BlogDetail'])->name('blog-details');

Route::get('/event',[App\Http\Controllers\HomeController::class,'Event'])->name('event');
Route::get('/event/{slug}',[App\Http\Controllers\HomeController::class,'EventDetail'])->name('event-details');

Route::get('/project', [App\Http\Controllers\HomeController::class, 'Project'])->name('project');
Route::get('/project/{slug}', [App\Http\Controllers\HomeController::class, 'ProjectDetail'])->name('project-details');


Route::get('/charts', [App\Http\Controllers\HomeController::class, 'barChart'])->name('account');




