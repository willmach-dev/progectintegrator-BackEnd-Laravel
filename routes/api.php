<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produtos;
use App\Http\Controllers\Customer;
use App\Http\Controllers\conta;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('produtos',[Produtos::class,'list']);
Route::post('produtos',[Produtos::class,'create']);
Route::get('produtos/{id}',[Produtos::class,'show']);
Route::put('produtos/{id}',[Produtos::class,'update']);
Route::delete('produtos/{id}',[Produtos::class,'destroy']);
Route::get('customer',[Customer::class,'list']);
Route::post('customer',[Customer::class,'create']);
Route::get('customer/{id}',[Customer::class,'show']);
Route::put('customer/{id}',[Customer::class,'update']);
Route::delete('customer/{id}',[Customer::class,'destroy']);
Route::post('conta/acessar',[Conta::class,'authenticate']);
