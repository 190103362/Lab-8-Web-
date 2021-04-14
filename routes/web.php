<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\UsersModel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Mail\MyMail;
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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::post('blog/create', [NewController:: class,'store'])->name('add-client');

 //Route::get('/post/{id}', [NewController::class, 'get_client']);

Route::post('blog/creates', [UserController::class, 'store'])->name('add-post');
 Route::get('blog/gmail', [UserController::class, 'index']);

 Route::get('blog/creates', function(){
    return view('form');
});
Route::get('mail',[MailController::class,'send']);