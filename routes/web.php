<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Models\MajorModel;
use App\Http\Controllers\AdvisorsController;
use App\Http\Controllers\TagController;
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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/insert-user',function(){
    $major_data = MajorModel::all();
    return view('insert_user',['oe_majors'=>$major_data]);
});
Route::post('/insert-user',[UserController::class, 'insertUser']);
Route::get('/user-list',[UserController::class, 'showUserList']);
Route::get('/delete-user/{user_id}',[UserController::class, 'deleteUser']);
Route::get('/edit-user/{user_id}',[UserController::class, 'editUser']);
Route::post('/edit-user',[UserController::class, 'updateUser']);
Route::post('/search-user',[UserController::class, 'searchUser']);
Route::get('/search-user',[UserController::class, 'searchUser']);
Route::get('/import-excel',[UserController::class, 'importExcel']);
Route::post('/import-excel',[UserController::class, 'saveImportedExcel']);

Route::get('/insert-advisors' , function(){
    return view('insert_advisors');
});
Route::post('/insert-advisors', [AdvisorsController::class, 'insertAdvisors']);

Route::get('/insert-tag', function(){
    return view('insert_tag');
});
Route::post('/insert-tag', [TagController::class, 'insertTag']);

Route::get('/insert-major', function(){
    return view('insert_major');
});

Route::post('/insert-major',[MajorController::class, 'insertMajor']);

Route::get('/insert-company', function(){
    return view('insert_company');
});

Route::post('/insert-company',[CompanyController::class, 'insertCompany']);

