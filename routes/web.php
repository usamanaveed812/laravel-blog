<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[PostController::class,'index']);
Route::get('/post-create',[PostController::class,'create'])->middleware(['auth']);
Route::post('/post-store',[PostController::class,'store']);
Route::get('/post-show/{id}',[PostController::class,'show']);
Route::get('/post-edit/{id}',[PostController::class,'edit'])->middleware(['auth']);
Route::put('/post-update/{id}',[PostController::class,'update']);
Route::get('/post-delete/{id}',[PostController::class,'destroy'])->middleware(['auth']);

Route::post('/save-likedislike',[PostController::class,'save_likedislike']);
Route::post('/comment-storecomment',[PostController::class,'storecomment']);
Route::post('/comment-replystore',[PostController::class,'replystore']);

// Route::get('/d// });ashboard',[Admin\DashboardController::class,'index']);


Route::get('/admin',[AdminController::class,'index'])->middleware(['auth','isAdmin']);

Route::get('/users',[UserController::class,'index']);
Route::get('/user{user_id}',[UserController::class,'edit']);
Route::put('/update-user/{user_id}',[UserController::class,'update']);

Route::get('posts',[PostController::class,'index1']);
Route::get('add-post',[PostController::class,'admincreate']);
Route::post('add-post',[PostController::class,'adminstore']);
Route::get('edit-post/{id}',[PostController::class,'adminedit']);
Route::put('update-post/{id}',[PostController::class,'adminupdate']);
Route::get('delete-post/{id}',[PostController::class,'admindestroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    // Voyager::routes();
});
