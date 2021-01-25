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


Route::resource('view_Tips', 'viewTipsController');
Route::resource('beranda', 'HomeController');

Route::resource('siswa', 'ResumeController');
// tampilan awal
Route::get('/', 'homeController@home')->name('home');
// tampilan kedua
Route::get('/redirect', 'homeController@redirect');
// membuat resume
Route::get('/buat_resume', 'ResumeController@index')->middleware(['auth','user']);
// feedback Success
Route::get('/sukses', 'ResumeController@sukses')->middleware(['auth','user']);
Route::post('/komentar', 'homeController@store');
Route::get('/page_siswa', 'homeController@index')->middleware(['auth','user']);
//Insert Resume
Route::post('/upload_resume', 'ResumeController@store');
//lihat resume
Route::get('/resume/view/{id}', 'ResumeController@show');

Route::get('/lowongan_kerja', 'homeController@lowongan_kerja');

Route::get('/email', 'homeController@email');

Route::get('/tips_trik', 'homeController@tips_trik');

Route::get('/cetak_pdf/{id}', 'ResumeController@cetak_pdf');
//--------------------------------------------------------------


//page Perusahaan
Route::resource('data', 'PerusahaanController');
Route::get('/page_perusahaan', 'PerusahaanController@index')->middleware(['auth','perusahaan']);
Route::get('/search', 'PerusahaanController@search');
//--------------------------------------------------------------

//admin

//-----------------------------------------------------


//Auth


Route::prefix('admin') -> namespace('Admin')
     ->middleware(['auth','admin'])
     -> group( function() {
    
    Route::get('/', 'DashboardController2@index')->name('dashboard');
    Route::get('/resume_dashboard', 'DashboardController2@resume')->name('resume');
    Route::get('/loker_dashboard', 'DashboardController2@loker')->name('loker');
    Route::get('/posting_loker', 'DashboardController2@posting')->name('posting_loker');
    Route::get('/komentar_dashboard', 'DashboardController2@komentar')->name('komentar');
    Route::get('/tips_dashboard', 'TipsController@index')->name('tips');
    Route::get('/posting_tips', 'TipsController@posting')->name('posting_tips');
    
    

    // download excel
    Route::get('/resume/download', 'DashboardController2@download')->name('download');
    //import
    Route::post('/upload', 'DashboardController2@upload')->name('upload');

    Route::post('/postingan', 'DashboardController@store');

    
    Route::resource('action-table', 'DashboardController2');
    Route::resource('action-table2', 'DashboardController3');
    Route::resource('action-table3', 'KomentarController');
    Route::resource('action-table4', 'TipsController');
   
});
    
Auth::routes();
//--------------------------------------------------------------