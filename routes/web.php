<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoansController;

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

// Route::get('/', function () {
//     return redirect('login');
// });

Route::get('/',[FrontController::class, "index"]);

Route::get('/home',[LoansController::class, "getLoans"])->middleware('auth');

Route::get('/apply-loan',function (){return view('loan');})->middleware('auth');
Route::post('apply-loan',[LoansController::class,'apply_loan'])->name('apply-loan')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::prefix('/admin')->group(function(){
    Route::get('/home', [\App\Http\Controllers\AdminController::class, 'index']);
});
