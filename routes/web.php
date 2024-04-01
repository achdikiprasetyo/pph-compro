<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\AuthController;


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
// routes/web.php





// Route::get('/service', function () {
//     return view('service');
// });
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
})->name('dokumentasi');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/karir', function () {
    return view('karir');
})->name('karir');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/logadmin', function () {
    return view('login');
})->name('login');

Route::get('/karir/daftar', function () {
    return view('lamar');
})->name('lamar');


use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminController;

//jasa engineer
Route::get('/jasa/engineer/pelatihan-tenaga-teknisi', function () {
    return view('jasa-engineer.pelatihanTenagaTeknisi');
})->name('jasa-engineer.pelatihanTenagaTeknisi');

Route::get('/jasa/engineer/penyedia-peralatan-teknisi', function () {
    return view('jasa-engineer.penyediaPeralatan');
})->name('jasa-engineer.penyediaPeralatan');

Route::get('/jasa/engineer/tenaga-ahli-teknisi', function () {
    return view('jasa-engineer.tenagaAhli');
})->name('jasa-engineer.tenagaAhli');

Route::get('/jasa/engineer/tenaga-teknisi', function () {
    return view('jasa-engineer.tenagaTeknisi');
})->name('jasa-engineer.tenagaTeknisi');

//jasa kebersihan
Route::get('/jasa/kebersihan/external-cleaning', function () {
    return view('jasa-kebersihan.externalCleaning');
})->name('jasa-kebersihan.externalCleaning');

Route::get('/jasa/kebersihan/general-cleaning', function () {
    return view('jasa-kebersihan.generalCleaning');
})->name('jasa-kebersihan.generalCleaning');

Route::get('/jasa/kebersihan/penyedia-peralatan-kebersihan', function () {
    return view('jasa-kebersihan.penyediaPeralatanKebersihan');
})->name('jasa-kebersihan.penyediaPeralatanKebersihan');

Route::get('/jasa/kebersihan/regular-cleaning', function () {
    return view('jasa-kebersihan.regularCleaning');
})->name('jasa-kebersihan.regularCleaning');


//jasa-keamanan
Route::get('/jasa/keamanan/konsultasi-keamanan', function () {
    return view('jasa-keamanan.konsultasiKeamanan');
})->name('jasa-keamanan.konsultasiKeamanan');

Route::get('/jasa/keamanan/pelatihan-keamanan', function () {
    return view('jasa-keamanan.pelatihanKeamanan');
})->name('jasa-keamanan.pelatihanKeamanan');

Route::get('/jasa/keamanan/penyedia-perlengkapan-keamanan', function () {
    return view('jasa-keamanan.penyediaPerlengkapanKeamanan');
})->name('jasa-keamanan.penyediaPerlengkapanKeamanan');

Route::get('/jasa/keamanan/tenaga-keamanan', function () {
    return view('jasa-keamanan.tenagaKeamanan');
})->name('jasa-keamanan.tenagaKeamanan');

//backoffice full
Route::get('/jasa/backoffice/admin', function () {
    return view('jasa-backoffice.admin');
})->name('jasa-backoffice.admin');

Route::get('/jasa/backoffice/call-center', function () {
    return view('jasa-backoffice.callCenter');
})->name('jasa-backoffice.callCenter');

Route::get('/jasa/backoffice/Customer-Service', function () {
    return view('jasa-backoffice.cs');
})->name('jasa-backoffice.cs');

Route::get('/jasa/backoffice/Data-Entry', function () {
    return view('jasa-backoffice.dataEntry');
})->name('jasa-backoffice.dataEntry');

Route::get('/jasa/backoffice/driver', function () {
    return view('jasa-backoffice.driver');
})->name('jasa-backoffice.driver');

Route::get('/jasa/backoffice/gardener', function () {
    return view('jasa-backoffice.gardener');
})->name('jasa-backoffice.gardener');

Route::get('/jasa/backoffice/kasir', function () {
    return view('jasa-backoffice.kasir');
})->name('jasa-backoffice.kasir');

Route::get('/jasa/backoffice/kurir', function () {
    return view('jasa-backoffice.kurir');
})->name('jasa-backoffice.kurir');

Route::get('/jasa/backoffice/marketing', function () {
    return view('jasa-backoffice.marketing');
})->name('jasa-backoffice.marketing');

Route::get('/jasa/backoffice/office-boy', function () {
    return view('jasa-backoffice.officeBoy');
})->name('jasa-backoffice.officeBoy');

Route::get('/jasa/backoffice/office-girl', function () {
    return view('jasa-backoffice.officeGirl');
})->name('jasa-backoffice.officeGirl');

Route::get('/jasa/backoffice/operator-parkir', function () {
    return view('jasa-backoffice.operatorParkir');
})->name('jasa-backoffice.operatorParkir');

Route::get('/jasa/backoffice/receptionist', function () {
    return view('jasa-backoffice.resepsionis');
})->name('jasa-backoffice.resepsionis');

Route::get('/jasa/backoffice/sales', function () {
    return view('jasa-backoffice.sales');
})->name('jasa-backoffice.sales');




//service
Route::get('/jasa/keamanan', function () {
    return view('jasa.keamanan');
})->name('jasa.keamanan');
Route::get('/jasa/produksi', function () {
    return view('jasa.produksi');
})->name('jasa.produksi');
Route::get('/jasa/kebersihan', function () {
    return view('jasa.kebersihan');
})->name('jasa.kebersihan');

Route::get('/jasa/sumber-daya-manusia', function () {
    return view('jasa.sdm');
})->name('jasa.sdm');

Route::get('/jasa/pelatihan', function () {
    return view('jasa.pelatihan');
})->name('jasa.pelatihan');

Route::get('/jasa/outbond', function () {
    return view('jasa.outbond');
})->name('jasa.outbond');

Route::get('/jasa/engineer', function () {
    return view('jasa.engineer');
})->name('jasa.engineer');

Route::get('/jasa/backoffice', function () {
    return view('jasa.backoffice');
})->name('jasa.backoffice');

Route::get('/admin/login', function () {
    return view('login');
})->name('login');

Route::get('/admin/register', function () {
    return view('register');
})->name('register');


// routes/web.php
Route::fallback(function () {
    return redirect('/');
});






// routes/web.php


// ...

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/articles/{id}', [ArtikelController::class, 'show'])->name('articles.show');
Route::get('/articles', [ArtikelController::class, 'index'])->name('articles.index');
// middleware
Route::middleware(['auth.user'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/adminis', [AdminController::class, 'index'])->name('admin.index');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/articles/create', [ArtikelController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArtikelController::class, 'store'])->name('articles.store');

Route::get('/articles/{id}/edit', [ArtikelController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArtikelController::class, 'update'])->name('articles.update');
Route::get('articles/{id}/delete', [ArtikelController::class, 'destroy'])->name('articles.destroy');
Route::prefix('/admin/panel')->name('admin.')->group(function () {
    Route::resource('articles', ArtikelController::class);
});
});
