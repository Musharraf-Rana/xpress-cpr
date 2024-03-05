<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear/{id}', function ($id) {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');

    return "Cleared!";
});


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('services.service');
})->name('service');

Route::get('/bls', function () {
    return view('services.bls');
})->name('bls');

Route::get('/cpr-for-pets', function () {
    return view('services.cpr_for_pets');
})->name('cpr_for_pets');

Route::get('/group-services', function () {
    return view('services.group_services');
})->name('group_services');

Route::get('/heart-server', function () {
    return view('services.heart_server');
})->name('heart_server');

Route::get('/mobile-services', function () {
    return view('services.mobile_services');
})->name('mobile_services');

Route::get('/private-services', function () {
    return view('services.private_services');
})->name('private_services');

Route::get('/special-events', function () {
    return view('services.special_events');
})->name('special_events');

Route::get('/blog', [ApiController::class, 'blogs'])->name('blog');
Route::get('/blog-details/{id?}', [ApiController::class, 'blogsDetails'])->name('blog.details');



Route::get('/our-product', function () {
    return view('our_product');
})->name('our_product');

Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thankyou');
Route::get('/services', [ApiController::class, 'allServices'])->name('all.services');

Route::get('/services/{id?}', [ApiController::class, 'serviceDetails'])->name('services');

Route::get('/appointment', [ApiController::class, 'index'])->name('appointment');