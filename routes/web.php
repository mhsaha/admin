<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
     Route::get('/', function () {
      return view('welcome');
      });
      Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

      @if(session()->has('success'))
   <script type="text/javascript">
      $(function(){
       $.notify("{{(session()->get('success')}}",{globalPosition:'top right', 
       className:'success'});
      });
   </script>
  @endif
//ffffffffffffffff{{$service->short_title}}
|
*/

Route::get('/', function () {
      return view('welcome');
      });


Route::get("/","Youtube@index");
Route::get('about-us','Youtube@aboutUs')->name ('about.us');
Route::get('contact-us','Youtube@contactUs')->name ('contact.us');
Route::get('/news-event/details/{id}','Youtube@newsDetails')->name 
('news.event.details');
Route::get('/our/mission','Youtube@mission')->name ('our.mission');
Route::get('/our/vision','Youtube@vision')->name ('our.vision');
Route::get('/news/events','Youtube@news_event')->name ('our.news.events');
Route::post('/contact/store','Youtube@store')->name ('contact.store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=> 'auth'],function(){
      Route::prefix('users')->group(function(){
            Route::get('/view','Backend\UserController@view')->name('users.view');
            Route::get('/add','Backend\UserController@add')->name('users.add');
            Route::post('/store','Backend\UserController@store')->name('users.store');
            Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
            Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
            Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');
      });
      
      
      
      Route::prefix('profiles')->group(function(){
            Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
            Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
            Route::post('/store','Backend\ProfileController@update')->name('profiles.update');
            Route::get('/password/view','Backend\ProfileController@passwordView')->name('profiles.password.view');
            Route::post('/password/update','Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
           
      });
      
      Route::prefix('logos')->group(function(){
            Route::get('/view','Backend\LogoController@view')->name('logos.view');
            Route::get('/add','Backend\LogoController@add')->name('logos.add');
            Route::post('/store','Backend\LogoController@store')->name('logos.store');
            Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
            Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
            Route::get('/delete/{id}','Backend\LogoController@delete')->name('logos.delete');
      });
      
      
      Route::prefix('sliders')->group(function(){
            Route::get('/view','Backend\SliderController@view')->name('sliders.view');
            Route::get('/add','Backend\SliderController@add')->name('sliders.add');
            Route::post('/store','Backend\SliderController@store')->name('sliders.store');
            Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
            Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
            Route::get('/delete/{id}','Backend\SliderController@delete')->name('sliders.delete');
      });
      
      Route::prefix('missions')->group(function(){
            Route::get('/view','Backend\MissionController@view')->name('missions.view');
            Route::get('/add','Backend\MissionController@add')->name('missions.add');
            Route::post('/store','Backend\MissionController@store')->name('missions.store');
            Route::get('/edit/{id}','Backend\MissionController@edit')->name('missions.edit');
            Route::post('/update/{id}','Backend\MissionController@update')->name('missions.update');
            Route::get('/delete/{id}','Backend\MissionController@delete')->name('missions.delete');
      });
      
      Route::prefix('visions')->group(function(){
            Route::get('/view','Backend\VisionController@view')->name('visions.view');
            Route::get('/add','Backend\VisionController@add')->name('visions.add');
            Route::post('/store','Backend\VisionController@store')->name('visions.store');
            Route::get('/edit/{id}','Backend\VisionController@edit')->name('visions.edit');
            Route::post('/update/{id}','Backend\VisionController@update')->name('visions.update');
            Route::get('/delete/{id}','Backend\VisionController@delete')->name('visions.delete');
      });
      Route::prefix('news_events')->group(function(){
            Route::get('/view','Backend\NewsEventController@view')->name('news_events.view');
            Route::get('/add','Backend\NewsEventController@add')->name('news_events.add');
            Route::post('/store','Backend\NewsEventController@store')->name('news_events.store');
            Route::get('/edit/{id}','Backend\NewsEventController@edit')->name('news_events.edit');
            Route::post('/update/{id}','Backend\NewsEventController@update')->name('news_events.update');
            Route::get('/delete/{id}','Backend\NewsEventController@delete')->name('news_events.delete');
      });
      
      Route::prefix('services')->group(function(){
            Route::get('/view','Backend\ServiceController@view')->name('services.view');
            Route::get('/add','Backend\ServiceController@add')->name('services.add');
            Route::post('/store','Backend\ServiceController@store')->name('services.store');
            Route::get('/edit/{id}','Backend\ServiceController@edit')->name('services.edit');
            Route::post('/update/{id}','Backend\ServiceController@update')->name('services.update');
            Route::get('/delete/{id}','Backend\ServiceController@delete')->name('services.delete');
      });
      
      Route::prefix('contacts')->group(function(){
            Route::get('/view','Backend\ContactController@view')->name('contacts.view');
            Route::get('/add','Backend\ContactController@add')->name('contacts.add');
            Route::post('/store','Backend\ContactController@store')->name('contacts.store');
            Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
            Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
            Route::get('/delete/{id}','Backend\ContactController@delete')->name('contacts.delete');
            Route::get('/communicate','Backend\ContactController@viewCommunucate')->name ('contacts.communicate');
            Route::get('/communicate/delete/{id}','Backend\ContactController@deleteCommunucate')->name ('contacts.communucate.delete');


      });
      
      Route::prefix('abouts')->group(function(){
            Route::get('/view','Backend\AboutController@view')->name('abouts.view');
            Route::get('/add','Backend\AboutController@add')->name('abouts.add');
            Route::post('/store','Backend\AboutController@store')->name('abouts.store');
            Route::get('/edit/{id}','Backend\AboutController@edit')->name('abouts.edit');
            Route::post('/update/{id}','Backend\AboutController@update')->name('abouts.update');
            Route::get('/delete/{id}','Backend\AboutController@delete')->name('abouts.delete');
      });
      
});
