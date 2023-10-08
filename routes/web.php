<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RemarkController;


// Route::get('edit-unit-{id}',[UnitController::class,'edit']);
// Route::Post('edit-{id}',[UnitController::class,'change']);
// Route::get('delete-unit-{id}',[UnitController::class,'delete']);

Route::get('/', [HomeController::class, 'indexpage']);
Route::get('units', [UnitController::class, 'unitpage']);
Route::get('appointments', [AppController::class, 'appointpage']);
Route::get('ranks', [RankController::class, 'rankpage']);
Route::get('remarks', [RemarkController::class, 'remarkpage']);
Route::get('postings', [PostController::class, 'postpage']);
Route::get('users', [UserController::class, 'userpage']);

// Form Links
Route::POST('appointment', [AppController::class, 'addappointment']);
Route::POST('unit', [UnitController::class, 'addunit']);
Route::POST('remark', [RemarkController::class, 'addRemark']);
Route::POST('rank', [RankController::class, 'addRank']);


