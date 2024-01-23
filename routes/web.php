<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleSpreadsheetController;

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

// Route::get('.env', function () {
//     return abort(403);
// });

// Route::get('.htaccess', function () {
//     return abort(403);
// });

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



Route::get('/event',[App\Http\Controllers\HomeController::class,'Event'])->name('event');
Route::get('/event/{slug}',[App\Http\Controllers\HomeController::class,'EventDetail'])->name('event-details');

Route::get('/project', [App\Http\Controllers\HomeController::class, 'Project'])->name('project');
Route::get('/project/{slug}', [App\Http\Controllers\HomeController::class, 'ProjectDetail'])->name('project-details');
Route::get('/complete/{status}', [App\Http\Controllers\HomeController::class, 'showProjects'])->name('complete');
Route::get('/ongoing/{status}', [App\Http\Controllers\HomeController::class, 'showProjects'])->name('ongoing');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'create'])->name('contact.create');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'store'])->name('contact.store');

//explore tap
Route::get('/accountablity', [App\Http\Controllers\HomeController::class, 'accChart'])->name('account');
Route::get('/pie', [App\Http\Controllers\HomeController::class, 'pieChart'])->name('account.pie');
Route::get('/bar', [App\Http\Controllers\HomeController::class, 'barChart'])->name('account.bar');
Route::get('/line', [App\Http\Controllers\HomeController::class, 'lineChart'])->name('account.line');
Route::get('/blog',[App\Http\Controllers\HomeController::class,'Blog'])->name('blog');
Route::get('/blog/{slug}',[App\Http\Controllers\HomeController::class,'BlogDetail'])->name('blog-details');
Route::view('/our-partner','frontend.explore.our-partner')->name('our-parners');


// Route::get('sheet', [App\Http\Controllers\GoogleSpreadsheetController::class, 'index']);



