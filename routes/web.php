<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Auth::routes();

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AdminController::class, 'post'])->name('post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::post('logout', [AuthController::class, 'logout'])->name('logout.post');


Route::get('/writer',[LoginController::class,'showWriterLoginForm'])->name('writer');
// Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

//Writers login and register Routes
Route::get('/writer/register',[RegisterController::class,'showWriterRegisterForm'])->name('writer.register-view');
Route::post('/writer/register',[RegisterController::class,'createWriter'])->name('writer.register');
Route::get('/login/writer', [LoginController::class,'showWriterLoginForm'])->name('writer.login');
Route::post('/login/writer', [LoginController::class,'writerLogin'])->name('writerpost.login');
//Writers Login routes end

// admin login and register routes
Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');
Route::get('/login/admin', [LoginController::class,'showAdminLoginForm'])->name('admin.login');
Route::post('/login/admin', [LoginController::class,'adminLogin'])->name('adminpost.login');
// admin login routes end here

// Route::get('/admin/dashboard',function(){return view('auth.admin');})->middleware('auth:admin');
Route::get('/writer/dashboard',[AdminController::class,'post_page'])->middleware('auth:writer');

    
Route::resource('products', ProductController::class);
Route::get('table', [TableController::class,'index']);




Route::get('add_blog',[PostController::class,'add_blog']);
Route::get('/',[AdminController::class,'post']);
// Route::get('post_page',[AdminController::class,'post_page']);
Route::post('add_post',[AdminController::class,'add_page']);
Route::get('post_pageadmin',[AdminController::class,'post_pages'])->middleware('auth:admin');
Route::post('add_postadmin',[AdminController::class,'add_pages']);

Route::get('/admin',[LoginController::class,'showAdminLoginForm']);
Route::get('/admin/dashboard',[AdminController::class,'show_post'])->name('admin')->middleware('auth:admin');
Route::get('show_post/writer',[AdminController::class,'show_postwriter'])->middleware('auth:writer');
Route::get('delete_post/{id}',[AdminController::class,'delete_post']);
Route::get('edit_page/{id}',[AdminController::class,'edit_page']);
Route::get('show_post/{id}',[AdminController::class,'show_page']);
Route::post('update_post/{id}',[AdminController::class,'update_post']);
Route::get('post_details/{id}',[AdminController::class,'post_details']);
Route::get('accept_post/{id}',[AdminController::class,'accept_post']);
Route::get('reject_post/{id}',[AdminController::class,'reject_post']);
Route::get('table',[AdminController::class,'table']);
Route::get('profile/user/{id}',[AdminController::class,'profile']);
Route::get('Category',[CategorieController::class,'index'])->middleware('auth:admin');
Route::post('add_category',[CategorieController::class,'addindex']);


Route::post('add_comment',[CommentController::class,'add_comment']);
Route::post('add_reply',[CommentController::class,'add_reply']);