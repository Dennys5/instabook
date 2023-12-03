<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\SearchController;
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

Route::get('/', function () {
    return redirect(route('book.index'));
});

Route::get('/dashboard', function () {
    return redirect(route('book.index'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::post('/search', SearchController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:creator'])->group(function () {
    Route::get('book/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
    Route::delete('book/destroy/{book}', [BookController::class, 'destroy'])->name('book.destroy');
});

Route::middleware(['auth', 'role:edit'])->group(function () {
    Route::get('/private', function () {
        return "Bonjour Admin";
    });
});

require __DIR__ . '/auth.php';
Route::resource('book', BookController::class);
Route::patch('/book/{id}/note', [BookController::class, 'store_note'])->name('book.store_note');
