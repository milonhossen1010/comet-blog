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



Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Post 
Route::resource('post-category', 'App\Http\Controllers\PostCategoryController')->middleware('usercheck')->middleware('userrolecheck');

//Frontend 
Route::get('/', 'App\Http\Controllers\FrontendController@index')->name('frontend.index');


//Settings
Route::group(['prefix' => 'settings', 'middleware'=>'userrolecheck', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get("change-logo","SettingsController@logoIndex")->name('logo.index');
    Route::put('change-logo', 'SettingsController@updateLogo')->name('logo.update');
    Route::get('social', 'SettingsController@socialIndex')->name('social.index');
    Route::put('update', 'SettingsController@socialUpdate')->name('social.update');
    Route::get('crt','SettingsController@crtIndex')->name('crt.index');
    Route::put('crt-update','SettingsController@crtUpdate')->name('crt.update');
    Route::get('clients','SettingsController@clientsIndex')->name('clients.index');
    Route::put('client-update','SettingsController@clientsUpdate')->name('clients.update');
    Route::get('site-identity','SettingsController@siteIdentityIndex')->name('site.identity.index'); 
    Route::put('identity-update','SettingsController@siteIdentityUpdate')->name('site.identity.update');

});


//Homepage 
Route::group(['prefix' => 'homepage', 'middleware' => 'userrolecheck', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('about', 'HomepageController@aboutIndex')->name('about.index');
    Route::put('about', 'HomepageController@aboutUpdate')->name('about.update');
    Route::get('setup','HomepageController@setup')->name('home.setup');
    Route::put('setup-update','HomepageController@setupUpdate')->name('setup.update');
    Route::get('services','HomepageController@servicesIndex')->name('services.index');
    Route::put('service-update', 'HomepageController@serviceUpdate')->name('service.update');
    Route::get('vision','HomepageController@visionIndex')->name('vision.index');
    Route::put('vision-update', 'HomepageController@visionUpdate')->name('vision.update');

});


//Users 
Route::group(['prefix' => 'user','middleware' => 'usercheck', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get("profile","UsersController@profileIndex")->name('profile.index');
    Route::put("profile-update","UsersController@profileEdit")->name('profile.edit');
    Route::post("profile-delete","UsersController@profileDelete")->name('profile.delete');
    Route::get('users','UsersController@allUserIndex')->name('all-users.index');
    Route::get('edit/{id}', 'UsersController@userEdit')->name('user.edit')->middleware('userrolecheck');
    Route::put('update','UsersController@userUpdate')->name('user.update');
    Route::get('user-delete/{id}', 'UsersController@userDelete')->name('user.delete')->middleware('userrolecheck');
});


//Slider Controller
Route::group(['prefix' => 'slider', 'namespace' => 'App\Http\Controllers', 'middleware' => 'userrolecheck'], function () {
    Route::get('slider', 'SliderController@sliderIndex')->name('slider.index');
    Route::post('create', 'SliderController@store')->name('slider.store');
    Route::get('view/{id}','SliderController@sliderPreviewId')->name('slider.preview');
   // Route::get('sliderView','SliderController@sliderView')->name('slider.view');
    Route::get('delete/{id}','SliderController@delete')->name('slider.delete');
    Route::get('edit/{id}', 'SliderController@edit')->name('slider.edit');
    Route::put('update','SliderController@update')->name('slider.update');
    Route::post('img-slider', 'SliderController@imgSliderCreate')->name('img.slider.create');
});


