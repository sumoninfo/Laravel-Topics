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
//Sociallite
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('record', function(){
	return view('record');
}); 
Route::post('record/store', 'RecordController@record')->name('record.store');
Route::get('send-mail', 'SendMailController@sendMail')->name('send-mail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
