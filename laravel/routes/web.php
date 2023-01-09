<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/contact', function () {
    return view('homepage.contact');
})->name('contact');

Route::get('materi',[HomepageController::class,'materi'])->name('home.materi');
Route::get('pelatihan',[HomepageController::class,'pelatihan'])->name('home.pelatihan');
Route::get('loker',[HomepageController::class,'loker'])->name('home.loker');
Route::get('pendaftaran-pelatihan/{id}',[HomepageController::class,'pendaftaran_pelatihan'])->name('home.pendaftaran_pelatihan');
Route::post('pendaftaran-pelatihan/{id}/upload_pendaftaran',[HomepageController::class,'upload_pendaftaran'])->name('home.upload_pendaftaran');
Route::get('profile',[HomepageController::class,'profile'])->name('home.profile');

Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin'],function () {
    Route::get('dashboard', function () {
        return view('dashboard.layout');
    })->name('admin.dashboard');
    Route::prefix('materi')->group(function () {
        Route::get('/', [MateriController::class, 'index'])->name('materi');
        Route::post('/store', [MateriController::class, 'store'])->name('materi.store');
        Route::get('/{id}/edit', [MateriController::class, 'edit'])->name('materi.edit');
        Route::post('/{id}/update', [MateriController::class, 'update'])->name('materi.update');
        Route::get('/{id}/delete', [MateriController::class, 'delete'])->name('materi.delete');
    });
    Route::prefix('pelatihan')->group(function () {
        Route::get('/', [PelatihanController::class, 'index'])->name('pelatihan');
        Route::post('/store', [PelatihanController::class, 'store'])->name('pelatihan.store');
        Route::get('/{id}/edit', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
        Route::post('/{id}/update', [PelatihanController::class, 'update'])->name('pelatihan.update');
        Route::get('/{id}/delete', [PelatihanController::class, 'delete'])->name('pelatihan.delete');
    });
    Route::prefix('loker')->group(function () {
        Route::get('/', [LokerController::class, 'index'])->name('loker');
        Route::post('/store', [LokerController::class, 'store'])->name('loker.store');
        Route::get('/{id}/edit', [LokerController::class, 'edit'])->name('loker.edit');
        Route::post('/{id}/update', [LokerController::class, 'update'])->name('loker.update');
        Route::get('/{id}/delete', [LokerController::class, 'delete'])->name('loker.delete');
    });
    Route::prefix('pendaftaran')->group(function () {
        Route::get('/', [PendaftaranController::class, 'index'])->name('pendaftaran');
        Route::get('/{id}/terima', [PendaftaranController::class, 'terima'])->name('pendaftaran.terima');
        Route::post('/{id}/update', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
        Route::get('/{id}/delete', [PendaftaranController::class, 'delete'])->name('pendaftaran.delete');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/{id}/update', [UserController::class, 'update'])->name('user.update');
        Route::get('/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
    });
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
