<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\PostController as Postv1;
use App\Http\Controllers\API\V2\PostController as Postv2;

Route::apiResource('v1/posts', Postv1::class)
    ->only(['show','index','destroy']);
    
Route::apiResource('v2/posts', Postv2::class)
->only(['show','index','destroy']);