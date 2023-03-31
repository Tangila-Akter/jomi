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

// Route::get('/',[HomeController::class,'index']);
// Route::get('/home',[HomeController::class,'redirects'])->middleware('auth','verified');

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get("/contact", [HomeController::class, "contact"]);
Route::get("/user_post", [HomeController::class, "cost"]);
Route::post("/upload_contact", [HomeController::class, "upload_contact"]);
Route::get("/user_about", [HomeController::class, "user_about"]);
// Route::get("/post", [HomeController::class, "post"]);
Route::get("/list", [HomeController::class, "list"]);
Route::post("/upload_post/{id}", [HomeController::class, "upload_post"]);
Route::post("/addcart/{id}", [HomeController::class, "addcart"]);
Route::post("/addcarthome/{id}", [HomeController::class, "addcarthome"]);
Route::get("/product_list", [HomeController::class, "productlist"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get("/redirects", [HomeController::class, "redirects"]);
Route::get("/admin_account", [AdminController::class, "admin_account"]);
Route::post("/admin_upload", [AdminController::class, "admin_upload"]);
Route::get("/deleteadmin/{id}", [AdminController::class, "deleteadmin"]);
Route::get("/admin_post", [AdminController::class, "admin_post"]);
Route::get("/deletepost/{id}", [AdminController::class, "deletepost"]);
Route::get("/admin_list/{id}", [AdminController::class, "admin_list"]);
Route::get("/deletelist/{id}", [AdminController::class, "deletelist"]);
Route::get("/admin_contact", [AdminController::class, "admin_contact"]);
Route::get("/deletecontact/{id}", [AdminController::class, "deletecontact"]);
Route::get("/admin_about", [AdminController::class, "admin_about"]);
Route::post("/admin_aboutUpload", [AdminController::class, "admin_aboutUpload"]);
Route::get("/deleteadminabout/{id}", [AdminController::class, "deleteadminabout"]);
require __DIR__.'/auth.php';
