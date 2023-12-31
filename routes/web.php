<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/dashbaord', function () {
//     return view('welcome');
// })->middleware('auth');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('contact/trash', [ContactController::class, 'trashed'])->middleware('auth')->name('contact.trash');
Route::put('contact/trash/{id}/restore', [ContactController::class, 'restore'])->middleware('auth')->name('contact.restore');
Route::delete('contact/trash/{id}/force-delete', [ContactController::class, 'forceDeleting'])->middleware('auth')->name('contact.forceDelete');
Route::resource('contact', ContactController::class)->middleware('auth')->names('contact');

require __DIR__ . '/auth.php';
