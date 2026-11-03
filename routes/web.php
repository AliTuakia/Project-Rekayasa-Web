<?php
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProjectController;
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'login'])->name('action.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('page.home');
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');
    Route::resource('project', AdminProjectController::class);
});