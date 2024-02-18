<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('education');
})->name('beginning');

Route::get('/berita','BeritaController@Home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Create
Route::get('/createnews','BeritaController@gotoCreate')->middleware('role');
Route::post('/createnews','BeritaController@store');

//Delete
Route::delete('/{id}','BeritaController@delete')->name('delete')->middleware('role');

//Update
Route::get('/update/{id}','BeritaController@gotoUpdateNews')->middleware('role');
Route::patch('/update/{id}','BeritaController@Update')->name('updatenews');

//page berita
Route::get('/berita/{id}','BeritaController@gotoNewsPage');

//page edu
Route::get('/education','EducationController@gotoEducationpage');

//page chart
Route::get('/charts','ChartController@gotoChartPage');
Route::get('/charts2','ChartController@gotoChartPage2');
Route::get('/charts3','ChartController@gotoChartPage3');

//page daftar vaksinasi
Route::get('/kota','DaftarVaksinasiController@pilihKotaPage')->middleware('auth');
Route::get('searchKota','DaftarVaksinasiController@searchKota')->name('City');

Route::get('/pilihLokasi/{id}','DaftarVaksinasiController@pilihLokasiPage')->middleware('auth');
Route::get('searchLokasi','DaftarVaksinasiController@searchLokasi')->name('Location');

Route::get('/daftar/{id}','DaftarVaksinasiController@toVaccine');
Route::post('/daftar','DaftarVaksinasiController@vaksinasi');

//create location
Route::get('/createlocation','DaftarVaksinasiController@createLocationPage')->middleware('role');
Route::post('/createlocation','DaftarVaksinasiController@createLocation');

//detele location
Route::delete('/pilihLokasi/{id}','DaftarVaksinasiController@deleteLocation')->name('dellocation')->middleware('role');

//update location
Route::get('/updatelocation/{id}','DaftarVaksinasiController@updateLocationPage')->name('up')->middleware('role');
Route::patch('/updatelocation/{id}','DaftarVaksinasiController@updateLocation')->name('update');

//View profil
Route::get('/profile', 'ProfileController@showProfile')->middleware('auth');

//Jika page tidak boleh dilewati
Route::get('/404', 'Controller@failed');

Route::get('/testing', 'Controller@tests');

