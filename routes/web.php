<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // $rooms=Rooms::take(8)->orderby('id','desc')->get();
    // $slider=Slider::take(6)->orderby('id','desc')->get();
    // $attraction=NearbyAttraction::take(6)->orderby('id','desc')->get();
    // $about=About::latest()->first();
    // $testimonial=Testimonial::take(6)->orderby('id','desc')->get();
    // return view('pages.index',compact('rooms','slider','attraction','about','testimonial'));
    return view('pages.index');

});


Route::get('/pages/rooms', [App\Http\Controllers\PagesController::class, 'rooms'])->name('pages.rooms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
