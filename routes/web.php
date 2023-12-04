<?php

use App\Http\Controllers\DevRantController;
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
Route::get('/', [DevRantController::class, 'login'])->name('devRant.base');    
//DEVRANT Routes. Delete this later lol.
Route::get('login', [DevRantController::class, 'login'])->name('devRant.login');
Route::post('login', [DevRantController::class, 'submitLogin'])->name('devRant.submitLogin');

Route::middleware('auth')->group(function () {
    Route::get('rants', [DevRantController::class, 'getRants'])->name('devRant.getRants');
    Route::post('postRant', [DevRantController::class, 'postRant'])->name('devRant.postRant');
    Route::get('rant', [DevRantController::class, 'showRant'])->name('devRant.showRant');
    Route::get('me', [DevRantController::class, 'viewProfile'])->name('devRant.me');
    Route::get('profile/{id}', [DevRantController::class, 'viewCustomProfile'])->name('devRant.show.custom.profile');
    Route::get('search/username', [DevRantController::class, 'searchUserByUsername'])->name('devRant.search.by.username');
});
