<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\booking;
use Illuminate\Support\Facades\Route;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});


Route::get('/book/snow-cleaning', function () {
    return view('booking/book-snow-cleaning');
});
Route::post('/book_snow_cleaning', [booking::class, 'snow_cleaning']);

Route::get('/book/baby-sitting', function () {
    return view('booking/book-baby-sitting');
});
Route::post('/book_baby_sitting', [booking::class, 'baby_sitting']);

Route::get('/book/grass-cutting', function () {
    return view('booking/book-grass-cutting');
});
Route::post('/book_grass_cutting', [booking::class, 'grass_cutting']);

Route::get('/book/airduct-cleaning', function () {
    return view('booking/book-airduct-cleaning');
});
Route::post('/book_airduct_cleaning', [booking::class, 'airduct_cleaning']);

Route::get('/book/maid-services', function () {
    return view('booking/book-maid-services');
});
Route::post('/book_maid', [booking::class, 'maid']);

Route::get('/book/packers-movers', function () {
    return view('booking/book-packers-movers');
});
Route::post('/book_packers_movers', [booking::class, 'packers_and_movers']);

Route::get('/dashboard', [Admin::class, 'booking'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/airduct', [Admin::class, 'booking_airduct'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/baby', [Admin::class, 'booking_baby'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/grass', [Admin::class, 'booking_grass'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/maids', [Admin::class, 'booking_maids'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/packers', [Admin::class, 'booking_packers'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/bookings/snow', [Admin::class, 'booking_snow'])->middleware(['auth'])->name('dashboard');

Route::post('/email', function (Request $request) {

    if ($request->isMethod('post')) {
        Mail::to('servicessmart85@gmail.com')->send(new WelcomeMail);
    } else {
        return redirect()->back()->with('fail','No message sent');
    }

    return view('submit');
});

Route::get('/email', function () {
    return redirect()->back()->with('fail','No message sent');
});

require __DIR__.'/auth.php';
