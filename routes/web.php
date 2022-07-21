<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolRegister;

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
// Route::get('/req', function () {
//     return view('welcome');
// });


Route::get('/register', [NavController::class, 'register']);
Route::post('/actionlogin', [LoginController::class, 'actionlogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/actionregister', [LoginController::class, 'actionregister']);

Route::get('/home', [NavController::class, 'home']);
Route::get('/schFormRegist', [SchoolRegister::class, 'form']);
Route::post('/saveDataStu', [SchoolRegister::class, 'saveDataStu']);
Route::get('/userRegistStatus/{email}', [SchoolRegister::class, 'userRegistStatus']);

Route::get('/registInfo', [SchoolRegister::class, 'adminRegistInfo']);
Route::get('/usersInfo', [SchoolRegister::class, 'adminUsersInfo']);
Route::get('/detail/{id}', [SchoolRegister::class, 'detail']);
Route::get('/tolak/{id}', [SchoolRegister::class, 'tolak']);
Route::get('/setuju/{id}', [SchoolRegister::class, 'setuju']);
Route::get('/cadangan/{id}', [SchoolRegister::class, 'cadangan']);

// Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
