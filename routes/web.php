<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
=======
>>>>>>> 03cfae21b365e06c7643ca440fe06c78ac36716d
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::redirect('/', '/admin');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
>>>>>>> 03cfae21b365e06c7643ca440fe06c78ac36716d
