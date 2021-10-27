<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\try1;

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
    return view('project1');
});

Route::get('insert',[try1::class,'insertform']);
Route::post('create',[try1::class,'insert']);

Route::get('/listdata', function () {

    $viewdata = DB::table('project1')->get();

    return view('viewdata', ['viewdata' => $viewdata]);
});