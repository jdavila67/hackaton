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


Route::prefix('portal')->middleware(['auth:sanctum', 'verified']) ->group(function () {
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
        Route::get('/actualizar/{id}', [\App\Http\Controllers\OrganizationController::class, 'edit'])->name('organization.edit');

        /* Members */
        Route::prefix('miembros')->group(function(){
            Route::get('/{id}',[\App\Http\Controllers\OrganizationMemberController::class, 'index'])->name('member.index');
            Route::get('/actualizar/{org}/{id}',[\App\Http\Controllers\OrganizationMemberController::class, 'edit'])->name('member.edit');
        });

        /* Events */
        Route::prefix('eventos')->group(function(){
            Route::get('/{id}',[\App\Http\Controllers\EventController::class, 'index'])->name('event.index');
            Route::get('/anadir/{id}',[\App\Http\Controllers\EventController::class, 'create'])->name('event.create');
            Route::get('/actualizar/{org}/{id}',[\App\Http\Controllers\EventController::class, 'edit'])->name('event.edit');
        });
    });

    /* Users */
    Route::prefix('usuarios')->group(function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::get('/anadir', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
        Route::get('/actualizar/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    });
});
