<?php

use App\Http\Controllers\Api\CandidatesController;
use App\Http\Controllers\Api\JobsController;
use App\Http\Controllers\Api\SkillsController;
use App\Http\Controllers\Api\SkillSetsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('jobs', [JobsController::class, 'index']);
Route::get('skill', [SkillsController::class, 'index']);

Route::post('kandidat', [CandidatesController::class, 'store']);
Route::post('skillset', [SkillSetsController::class, 'tambah']);
