<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Models\MajorModel;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\TagController;
use App\Models\RoleModel;
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
    $role_data = RoleModel::all();
    return view('insert_user',['oe_majors'=>$major_data,'oe_roles'=>$role_data]);
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
Route::get('/user-profile/{user_id}',[UserController::class, 'ShowUserProfile']);
Route::post('update-user-detail/{user_id}/{detail_name}',[UserController::class,'updateUserDetail']);
Route::post('update-user-detail/{user_id}',[UserController::class,'updateUserDetail']);

Route::get('/insert-advisor' , function(){
    return view('insert_advisor');
});
Route::post('/insert-advisor', [AdvisorController::class, 'insertAdvisor']);

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

Route::get('/advisor-list',[AdvisorController::class, 'showAdvisorList']);


Route::post('update-advisor/{advisor_id}',[AdvisorController::class, 'updateAdvisor']);

Route::get('/company-list',[CompanyController::class, 'showCompanyList']);
Route::get('/delete-company/{company_id}',[CompanyController::class, 'deleteCompany']);
Route::get('/edit-company/{company_id}',[CompanyController::class, 'editCompany']);

Route::post('update-company/{companyr_id}',[CompanyController::class, 'updateCompany']);

Route::get('/homePage', function (){
    return view('home');
});
Route::get('/403forbidden', function (){
    return view('forbidden');
});

Route::get('/select-template1', function(){
    return view('template1');
});

Route::get('/tag-list',[TagController::class, 'showTagList']);
Route::get('/delete-tag/{tag_id}',[TagController::class, 'deleteTag']);
Route::get('/edit-tag/{tag_id}',[TagController::class, 'editTag']);
Route::post('update-tag/{tag_id}',[TagController::class, 'updateTag']);

Route::get('/project-list',[ProjectController::class, 'showProjectList']);
Route::get('/delete-project/{proj_id}',[ProjectController::class, 'deleteProject']);
Route::get('/edit-project/{proj_id}',[ProjectController::class, 'editProject']);
Route::post('update-project/{proj_id}',[ProjectController::class, 'updateProject']);
Route::get('/select-template2', function(){
    return view('template2');
});

Route::get('/input-template1', function(){
    return view('template1_form');
});

Route::get('/favorite', function(){
    return view('favorite_project');
});
