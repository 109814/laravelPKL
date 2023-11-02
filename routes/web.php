<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\createBeritaController;
use App\Http\Controllers\VisimisisekolahController;
use App\Http\Controllers\VisimisiController;
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

// Route::get('/w', function () {
//     return view('welcome');
// });
// Route::get('/homedashboard', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('indexhome');
Route::get('/', [HomeController::class,'index'])->name('indexhome');
Route::get('/tampilkandata/{id}', [VisimisiController::class, 'edit'])->name('tampilkandata');
Route::post('/updatedata/{id}', [VisimisiController::class, 'update'])->name('updatedata');


Route::delete('/createjurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

Route::middleware(['auth', 'verified', 'role:superadmin|admin'])->group(function(){

    Route::get('/createberita', [createBeritaController::class, 'index'])->name('createberita');
    Route::get('/createjurusan', [JurusanController::class, 'index'])->name('createjurusan');
    Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// cara buat role sambungkan dulu di kernel baris ke 67
// Route::get('admin', function(){
//     return '<h1>Hello Admi</h1>';
// })->middleware(['auth', 'verified', 'role:superadmin|admin']);

require __DIR__.'/auth.php';
