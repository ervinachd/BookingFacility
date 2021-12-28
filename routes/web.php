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
    return view('home');
});

Auth::routes();

Route::get('/home', 'FacilityController@facil');

Route::get('/home', 'booking@index');
Route::get('/admin', 'BookingController@reportpayment');
Route::get('/home', 'BookingController@reportpayment')->name('admin.dashboard');
Route::get('/facility', 'FacilityController@index');
Route::get('/createfacility/{id}', 'FacilityController@create');
Route::post('/createfacility/{id}', 'FacilityController@FacilityForm');
Route::get('/adminfacility/edit/{id}', 'FacilityController@edit')->name('facility.edit');
Route::post('/update/{id}', 'FacilityController@update');
Route::get('/adminfacility/delete/{id}', 'FacilityController@delete')->name('adminfacility.delete');
Route::get('/user/booking','BookingController@index');
Route::get('/adminfacility/detailfacility/{id}','FacilityController@category');

Route::get('/adminfacility/newfacility', 'FacilityController@newfacility');
Route::post('/adminfacility/newfacility', 'FacilityController@formnewfacility');

Route::get('/facility/delete/{id}', 'FacilityController@deletefacility');

Route::get('/user/bookfacility/{id}', 'BookingController@view');

Route::get('/user/showbook/{id}', 'BookingController@show');

Route::get('/user/detailshowbook/{id}', 'BookingController@getfacility');

Route::post('/user/detailshowbook/{id}', 'BookingController@book');

Route::get('/user/listbook', 'BookingController@listbook');

Route::get('/user/payment/{id}', 'BookingController@pay');

Route::post('/user/payment/{id}', 'BookingController@payment');

Route::get('/adminfacility/bookinglist', 'BookingController@booklist');

Route::get('/adminfacility/transaction/{id}', 'BookingController@showtransaction');
Route::get('/approve/{id}', 'BookingController@Approve')->name('admin.approve');
Route::get('error', 'BookingController@error');
Route::get('successpayment', 'ControllerEmail@index');
Route::get('successbook', 'ControllerEmail@success');
Route::get('/user/listpayment', 'BookingController@listpayment');
Route::get('/user/faq', 'BookingController@faq');

Route::get('/payment', 'BookingController@listpay');
Route::get('/adminfacility/pendingreceipt', 'BookingController@pendingpage');

Route::get('/adminfacility/pending/{id}', 'BookingController@pending');
Route::post('/adminfacility/pending/{id}', 'BookingController@pendingform');


Route::get('/user/pending/{id}', 'BookingController@detailpending');
Route::post('/user/pending/{id}', 'BookingController@pendingimage');
Route::get('/pendingprocess', 'BookingController@pendingprocess');
Route::get('/adminfacility/detailpending/{id}', 'BookingController@adminpending');

Route::get('/user/receipt/delete/{id}', 'BookingController@cancelbook');
Route::get('/user/receipt/{id}', 'UserController@receipt');

Route::get('/adminfacility/reportpayment', 'UserController@reportpayment');