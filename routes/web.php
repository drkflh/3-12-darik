<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Darik Aflah Aufah Arisianto",
        "email" => "3103120065@student.smktelkom-pwt.sch.id",
        "umur" => "16 Tahun",
        "nohp" => "+62 821-3695-1197",
        "gambar" => "darikk.png"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
// Route::resource('/contact', ContactController::class);
route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::resource('Image', PhotoController::class);

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    route::get('contact/index', [ContactController::class, 'index'])->name('contact.index');
    route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    route::post('contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    route::get('contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});