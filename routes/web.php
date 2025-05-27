<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [UserController::class, 'home'])->name('home');
Route::post('/home', [UserController::class, 'homepost'])->name('homepost');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile', [UserController::class, 'profilepost'])->name('profilepost');

Route::get('/experience', [UserController::class, 'experience'])->name('experience');
Route::post('/experience', [UserController::class, 'experiencepost'])->name('experiencepost');


Route::get('/education', [UserController::class, 'education'])->name('education');
Route::post('/education', [UserController::class, 'educationpost'])->name('educationpost');

Route::get('/skills', [UserController::class, 'skills'])->name('skills');
Route::post('/skills', [UserController::class, 'skillspost'])->name('skillspost');

