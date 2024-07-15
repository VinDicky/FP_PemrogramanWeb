<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\HomepageController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index'])->name('services');
Route::get('/cars', [CarController::class, 'index'])->name('cars');
Route::get('/cars/{car:slug}', [CarController::class, 'show'])->name('car.show');
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/rentals/create/{slug}', [RentalController::class, 'create'])->name('rentals.create');
    Route::post('/rentals/store/{slug}', [RentalController::class, 'store'])->name('rentals.store');
    Route::get('/rentals/history', [RentalController::class, 'history'])->name('rentals.history');
});

require __DIR__.'/auth.php';
