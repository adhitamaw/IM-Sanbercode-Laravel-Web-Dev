<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [FormController::class, 'welcome']);

Route::prefix('genre')->group(function() {
    // Index (Read All)
    Route::get('/', [GenreController::class, 'index'])->name('genres.index');
    
    // Create
    Route::get('/create', [GenreController::class, 'create'])->name('genres.create');
    Route::post('/', [GenreController::class, 'store'])->name('genres.store');
    
    // Read Single
    Route::get('/{jobtype_id}', [GenreController::class, 'show'])->name('genres.show');
    
    // Update
    Route::get('/{jobtype_id}/edit', [GenreController::class, 'edit'])->name('genres.edit');
    Route::put('/{jobtype_id}', [GenreController::class, 'update'])->name('genres.update');
    
    // Delete
    Route::delete('/{jobtype_id}', [GenreController::class, 'destroy'])->name('genres.destroy');
});


