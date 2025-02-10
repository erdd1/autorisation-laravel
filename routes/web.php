<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cylabsController;

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

/*Route::get('/', function () {
    return view('acceuil');
});*/

Route::get('/acceuil', [cylabsController::class,'index'])->middleware('auth')->can('access-cy-labs', 'user');
Route::get('/acceuil', [cylabsController::class,'index'])->middleware('auth')->can('access-cy-labs', 'admin');



























Route::get('/formulaire', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/formulaire', [AuthController::class, 'login']);

Route::get('/acceuil', [cylabsController::class, 'index'])->name('acceuil');
Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('acceuil');
    Route::resource('posts', PostController::class)->except(['index']);
});

