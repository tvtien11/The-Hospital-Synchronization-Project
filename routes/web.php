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
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Trung
//Code router cho thằng admin

	Route::prefix('pages')->group(function () {
	Route::prefix('admin')->group(function(){
		Route::get('add', 'AdminController@getAddHospital' )->name('add');
		Route::post('add', 'AdminController@getAddHospital' )->name('add1');
		Route::get('edit', 'AdminController@getEditHospital' )->name('edit');
		Route::get('edit', 'AdminController@getEditHospital' )->name('edit1');
		Route::get('view', 'AdminController@getViewHospital' )->name('view');
		Route::get('delete', 'AdminController@getDeleteHospital' )->name('delete');
		Route::get('login','AdminController@getLoginHospital')->name('login');
		Route::get('login','AdminController@postLoginHospital')->name('login1');

    Route::get('/ajax-district/{idProvince}', 'AdminController@getAjaxDistrict');
    Route::get('/ajax-ward/{idProvince}/{idDistrict}', 'AdminController@getAjaxWard');
      Route::get('/ajax-district/{idProvince}', 'AjaxController@getAjaxDistrict');
    Route::get('/ajax-ward/{idProvince}/{idDistrict}', 'AjaxController@getAjaxWard');
   
	});
});



//Tien
//Code router cho thằng hospital
Route::prefix('dashboard')->group(function () {

    Route::get('/add-patient', 'DashboardController@getAddPatient');
    Route::post('/add-patient', 'DashboardController@postAddPatient');
    Route::get('login','DashboardController@getLoginHospital')->name('login');
		Route::get('login','DashboardController@postLoginHospital')->name('login1');

    Route::get('/ajax-district/{idProvince}', 'AjaxController@getAjaxDistrict');
    Route::get('/ajax-ward/{idProvince}/{idDistrict}', 'AjaxController@getAjaxWard');

    Route::get('/add-record/{idPatient}', 'DashboardController@getAddRecord');
    Route::post('/add-record', 'DashboardController@postAddRecord');

    Route::post('/search', 'DashboardController@postSearch');

});
