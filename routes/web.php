<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'index']);

Route::get('/news', [AppController::class, 'news'])->name('news');
Route::get('/detail/{slug}', [AppController::class, 'detail'])->name('detail');

Route::get('/extra', function () {
    return view('extra.extra');
});
Route::get('/extra/pramuka', function () {
    return view('extra.pramuka');
});
Route::get('/extra/jurnal', function () {
    return view('extra.jurnal');
});
Route::get('/extra/futsal', function () {
    return view('extra.futsal');
});
Route::get('/extra/voli', function () {
    return view('extra.voli');
});
Route::get('/extra/pa', function () {
    return view('extra.pa');
});
Route::get('/extra/pmr', function () {
    return view('extra.pmr');
});
// Route::get('/kegiatan', function () {
//     return view('kegiatan.kegiatan');
// });
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/edit/{id}', [PhotoController::class, 'edit'])->name('photo.edit')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');
