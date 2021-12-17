<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('authors')->group(function (){
    Route::get('/',[AuthorController::class,"index"])->name("authors.index");
    Route::get('/create',[AuthorController::class,"showFormCreate"])->name("authors.showFormCreate");
    Route::post('/create',[AuthorController::class,"create"])->middleware('checkName');
    Route::get('/{id}/detail',[AuthorController::class,"show"])->name("authors.show");
    Route::get('/{id}/delete',[AuthorController::class,"delete"])->name("authors.delete");
    Route::get('/{id}/update',[AuthorController::class,"edit"])->name("authors.edit");
    Route::post('/{id}/update',[AuthorController::class,"update"])->name("authors.update");
});
