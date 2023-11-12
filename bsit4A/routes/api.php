<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service\MainService;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/getallitem",[MainService::class,"getAllUserItem"]);
Route::post("/additem",[MainService::class,"addUserItem"]);
Route::post("/updateitem/{id}",[MainService::class,"updateUserItem"]);
Route::post("/deleteitem/{id}",[MainService::class,"deleteUserItem"]);
