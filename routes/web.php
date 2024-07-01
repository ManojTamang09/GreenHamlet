<?php

use App\About;
use App\Rooms;
use App\Slider;
use App\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;

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
    $rooms=Rooms::take(8)->orderby('id','desc')->get();
    $slider=Slider::take(6)->orderby('id','desc')->get();
    // $attraction=NearbyAttraction::take(6)->orderby('id','desc')->get();
    $about=About::latest()->first();
    $testimonial=Testimonial::take(6)->orderby('id','desc')->get();
    return view('pages.index',compact('rooms','slider','about','testimonial'));

});


Route::post('/pages/store', 'App\Http\Controllers\PagesController@store')->name('pages.store');
Route::get('/pages/rooms','App\Http\Controllers\PagesController@rooms')->name('pages.rooms');
Route::get('/pages/roomdetails/{id}','App\Http\Controllers\PagesController@roomdetails')->name('pages.roomdetails');
Route::get('/pages/aboutus','App\Http\Controllers\PagesController@aboutus')->name('pages.aboutus');
Route::get('/pages/gallery','App\Http\Controllers\PagesController@gallery')->name('pages.gallery');
Route::get('/pages/contactus','App\Http\Controllers\PagesController@contactus')->name('pages.contactus');
Route::post('/pages/contactstore','App\Http\Controllers\PagesController@contactstore')->name('pages.contactstore');
Route::get('/pages/amenities','App\Http\Controllers\PagesController@amenities')->name('pages.amenities');


Route::middleware('auth')->group(function () {

    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::resource('rooms','App\Http\Controllers\RoomsController');
    Route::get('/rooms/deletephoto/{id}','App\Http\Controllers\RoomsController@deletephoto')->name('rooms.deletephoto');
    Route::get('/rooms/deleteamenities/{id}','App\Http\Controllers\RoomsController@deleteamenities')->name('rooms.deleteamenities');
    Route::resource('gallery1', 'App\Http\Controllers\GalleryController');
    Route::resource('slider', 'App\Http\Controllers\SliderController');
    Route::resource('contact', 'App\Http\Controllers\ContactController');
    Route::resource('feedback', 'App\Http\Controllers\FeedbackController');
    Route::resource('roomenquiry', 'App\Http\Controllers\RoomEnquiryController');
    Route::resource('about', 'App\Http\Controllers\AboutController');
    // Route::resource('attractions', 'App\Http\Controllers\NearbyAttractionController');
    // Route::resource('testimonials', 'App\Http\Controllers\TestimonialController');
 });

Auth::routes();
