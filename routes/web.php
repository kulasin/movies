<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::middleware('auth')->group(function () {
    // View all movies (initial route)
    Route::get('/home', [MoviesController::class, 'index'])->name('home');

    // My followings
    Route::get('/followed', [MoviesController::class, 'followed'])->name('followed');
    
    // Create a movie
    Route::get('/create', [MoviesController::class, 'create'])->name('create');
    Route::post('/create', [MoviesController::class, 'store'])->name('store');


    // Delete a movie
    Route::delete('/{slug}', [MoviesController::class, 'destroy'])->name('delete');


     // View one movie
     Route::get('/{slug}', [MoviesController::class, 'show'])->name('view');
    
      // User follows movie
      Route::post('/{slug}/follow', [MoviesController::class, 'follow'])->name('follow');

     // User unfollows movie
     Route::post('/{slug}/unfollow', [MoviesController::class, 'unfollow'])->name('unfollow');

  
  
     



    


});
















