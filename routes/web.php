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

Route::prefix('portal')->middleware(['auth:sanctum', 'verified']) ->group(function () {

    Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/donaciones', [\App\Http\Controllers\AdminController::class, 'donation'])->name('admin.donation');

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
        /* Volunteers */
        Route::prefix('voluntarios')->group(function(){
            Route::get('/{id}',[\App\Http\Controllers\VolunteerController::class, 'index'])->name('volunteer.index');
            Route::get('/anadir/{id}',[\App\Http\Controllers\VolunteerController::class, 'create'])->name('volunteer.create');
            Route::get('/actualizar/{org}/{id}',[\App\Http\Controllers\VolunteerController::class, 'edit'])->name('volunteer.edit');
            Route::delete('/eliminar/{org}/{id}',[\App\Http\Controllers\VolunteerController::class, 'delete'])->name('volunteer.delete');
        });
        /* Posts */
        Route::prefix('posts')->group(function(){
            Route::get('/{id}',[\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
            Route::get('/anadir/{id}',[\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
            Route::get('/actualizar/{org}/{id}',[\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
            Route::post('/actualizar/',[\App\Http\Controllers\PostController::class, 'post'])->name('post.post');
            Route::delete('/eliminar/{org}/{id}',[\App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

        });

        /* Comments */
        Route::prefix('comentarios')->group(function(){
            Route::get('/{id}',[\App\Http\Controllers\PostCommentsController::class, 'index'])->name('comments.index');
            Route::get('/anadir/{id}',[\App\Http\Controllers\PostCommentsController::class, 'create'])->name('comments.create');
            Route::get('/actualizar/{org}/{id}',[\App\Http\Controllers\PostCommentsController::class, 'edit'])->name('comments.edit');
            Route::delete('/eliminar/{org}/{id}',[\App\Http\Controllers\PostCommentsController::class, 'delete'])->name('comments.delete');
        });

    });

    /* Users */
    Route::prefix('usuarios')->group(function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::get('/anadir', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
        Route::get('/actualizar/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    });

});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/eventos', [\App\Http\Controllers\HomeController::class, 'event'])->name('home.event');
Route::get('/eventos/{id}', [\App\Http\Controllers\HomeController::class, 'event_org'])->name('home.event.org');
Route::get('/evento/{id}', [\App\Http\Controllers\HomeController::class, 'event_profile'])->name('home.event.profile');
Route::get('/organizaciones', [\App\Http\Controllers\HomeController::class, 'organization'])->name('home.organization');
Route::get('/organizaciones/perfil/{id}', [\App\Http\Controllers\HomeController::class, 'profile'])->name('home.organization.profile');
Route::get('/donaciones', [\App\Http\Controllers\HomeController::class, 'donation'])->name('home.donation');
Route::get('/sobre-nosotros', [\App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/publicaciones', [\App\Http\Controllers\HomeController::class, 'post'])->name('home.post');
Route::get('/paypal/success', [\App\Http\Controllers\HomeController::class, 'paypal_success'])->name('home.paypal.success');
Route::get('/paypal/cancel', [\App\Http\Controllers\HomeController::class, 'paypal_cancel'])->name('home.paypal.cancel');
Route::get('/paypal/{amount}', [\App\Http\Controllers\HomeController::class, 'paypal'])->name('home.donation.paypal');
Route::get('/confirmacion-pago', [\App\Http\Controllers\HomeController::class, 'confirmation_payment'])->name('home.confirmation.payment');
Route::get('/{name}', [\App\Http\Controllers\HomeController::class, 'perfil'])->name('home.organization.perfil');

