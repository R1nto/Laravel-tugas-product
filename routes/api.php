<?php

use App\Http\Controllers\KategorisController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrderDetailvController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'],function ()
{
   Route::apiResource('skills',SkillController::class); 
   Route::apiResource('products',ProductController::class);
   Route::apiResource('category',KategorisController::class);
   Route::apiResource('pelanggan',PelangganController::class);
   Route::apiResource('halo',OrderDetailvController::class);
   Route::apiResource('orderdetails',OrderDetailController::class);
   Route::apiResource('order',OrderController::class);  
});
?>