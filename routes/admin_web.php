<?php

use App\Http\Controllers\Backend\PageController;
use Illuminate\Support\Facades\Route;

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
    Route::prefix('admin')->middleware('auth:admin_user')->group(function(){
      Route::get('/',[PageController::class,'home'])->name('admin.home');
    });


