<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirects'])->middleware('auth','verified');
Route::get("/contact", [HomeController::class, "contact"]);
Route::get("/user_post", [HomeController::class, "cost"]);
Route::post("/upload_contact", [HomeController::class, "upload_contact"]);
// Route::get("/post", [HomeController::class, "post"]);
Route::get("/list", [HomeController::class, "list"]);
Route::post("/upload_post", [HomeController::class, "upload_post"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("/redirects", [HomeController::class, "redirects"]);
require __DIR__.'/auth.php';
