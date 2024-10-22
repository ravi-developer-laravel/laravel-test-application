<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\UserSubscriberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/newpost/{website}/posts', [BlogPostController::class, 'create'])
    ->name('newpost.post.create');

Route::post('/sendemail/{website}/subscribe', [UserSubscriberController::class, 'storeSubscribe'])
    ->name('users.subscribe');
