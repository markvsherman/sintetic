<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;;
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

//Route::get('/projects', function () {
//    return view('projects');
//})->name('project_list');

Route::get('/proj',function () {
    return view('project');
});

//Route::post('/projects/new',function () {
//    echo "craete";
//    return "";});


Route::get('/projects',[ProjectController::class, 'index'])->name('project_list');
Route::get('/projects/new',[ProjectController::class, 'add']);
Route::post('/projects/new',[ProjectController::class, 'create']);

Route::get('/proj/{proj}', [ProjectController::class, 'edit']);
Route::post('/proj/{proj}', [ProjectController::class, 'update']);

