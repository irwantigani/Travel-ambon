<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriWisataController;
use App\Http\Controllers\BeritaController ;
use App\Http\Controllers\PetaController ;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\SejarahAmbonController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DetailSejarahController;
use App\Http\Controllers\DetailPantaiController;
use App\Http\Controllers\DetailAlamController;
use App\Http\Controllers\DetailEdukasiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

// routes/web.php

Route::get('/destination', [DestinationController::class, 'index'])->name('frontend.destination.index');
Route::get('/destination/detail', [DestinationController::class, 'detailsejarah'])->name('frontend.destination.detail');
Route::get('/destination/detailpantai', [DestinationController::class, 'detailpantai'])->name('frontend.destination.detailpantai');
Route::get('/destination/detailalam', [DestinationController::class, 'detailalam'])->name('frontend.destination.detailalam');
Route::get('/destination/detailedukasi', [DestinationController::class, 'detailedukasi'])->name('frontend.destination.detailedukasi');

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/galeri', 'GaleriController@index')->name('frontend.galeri');

Route::get('/galeri', 'GaleriController@index')->name('frontend.galeri');
Route::get('/news', 'NewsController@index')->name('frontend.news');
Route::get('destination', 'DestinationController@index')->name('frontend.destination.index');
Route::get('/lokasi', 'LokasiController@index')->name('frontend.lokasi');
Route::get('/sejarahambon', 'SejarahAmbonController@index')->name('frontend.sejarahambon');




Auth::routes();
Route::resource('files', FileController::class);
Route::get('/files/create', [FileController::class, 'create'])->name('files.create');
Route::get('/files/edit', [FileController::class, 'edit'])->name('files.edit');
Route::get('/files/{id}/edit', 'App\Http\Controllers\FileController@edit')->name('files.edit');
Route::post('/files/store', [FileController::class, 'store'])->name('files.store');
Route::put('/files/{id}', [FilesController::class, 'update'])->name('berita.update');
Route::get('/files/{id}', 'App\Http\Controllers\FileController@show')->name('files.show');




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori-wisata', \App\Http\Controllers\KategoriWisataController::class);

Route::resource('kategori-wisata', KategoriWisataController::class);

Route::get('kategori-wisata/datatables', [KategoriWisataController::class, 'datatables'])->name('kategori-wisata.datatables');
Route::get('kategori-wisata/{id}/edit', [KategoriWisataController::class, 'edit'])->name('kategori-wisata.edit');



Route::resource('berita', BeritaController::class);
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');
Route::get('/berita/{id}/edit', [NewsController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{id}', [NewsController::class, 'update'])->name('berita.update');
Route::delete('/berita/{id}', 'BeritaController@destroy')->name('berita.destroy');



Route::resource('peta', PetaController::class);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


