<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

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

// Route::get('/', [DemoController::class, 'DemoAction']);
// Route::get('/', [DemoController::class, 'unionFunction']);
// Route::get('/', [DemoController::class, 'data']);
// Route::get('/demo', function(){
//     return "Hello World";
// });

// Route::parmanentredirect('/demo1', '/demo2');
// Route::get('user/{name}', function(string $name){
//     return 'user'."=".$name;
// })->where('name', '[a-z]');

Route::view('/', 'layouts.index');
