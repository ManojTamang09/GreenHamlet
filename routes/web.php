<?php

use App\About;
use App\Rooms;
use App\Slider;
use App\Testimonial;
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
// Route::get('/pages/attractiondetails/{id}','PagesController@attractiondetails')->name('pages.attractiondetails');
// Route::get('/pages/allroomdetails','PagesController@allroomdetails')->name('pages.allroomdetails');
Route::get('/pages/aboutus','App\Http\Controllers\PagesController@aboutus')->name('pages.aboutus');
// Route::get('/pages/gallery','PagesController@gallery')->name('pages.gallery');
Route::get('/pages/contactus','App\Http\Controllers\PagesController@contactus')->name('pages.contactus');
Route::post('/pages/contactstore','App\Http\Controllers\PagesController@contactstore')->name('pages.contactstore');
Route::get('/pages/amenities','App\Http\Controllers\PagesController@amenities')->name('pages.amenities');
// Route::get('/pages/attractions','PagesController@attractions')->name('pages.attractions');


Route::middleware('auth')->group(function () {

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::resource('rooms','RoomsController@index');
    Route::get('/rooms/deletephoto/{id}','RoomsController@deletephoto')->name('rooms.deletephoto');
    Route::get('/rooms/deleteamenities/{id}','RoomsController@deleteamenities')->name('rooms.deleteamenities');
    Route::resource('gallery1', 'GalleryController');
    Route::resource('slider', 'SliderController');
    Route::resource('contact', 'ContactController');
    Route::resource('feedback', 'FeedbackController');
    Route::resource('roomenquiry', 'RoomEnquiryController');
    Route::resource('attractions', 'NearbyAttractionController');
    Route::resource('about', 'AboutController');
    Route::resource('testimonials', 'TestimonialController');
 });

Auth::routes();
