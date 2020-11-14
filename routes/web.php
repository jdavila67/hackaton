<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /* Organization Router */
    Route::prefix('organizacion')->group(function () {
        Route::get('/', [\App\Http\Controllers\OrganizationController::class, 'index'])->name('organization');
        Route::get('/anadir', [\App\Http\Controllers\OrganizationController::class, 'create'])->name('organization.create');
    });
});
