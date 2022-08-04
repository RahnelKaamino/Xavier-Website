<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pages
Route::get('/about',[App\Http\Controllers\Pages\AboutController::class,'index'])->name('about');

Route::get('/news',[App\Http\Controllers\Pages\NewsController::class,'index'])->name('news');

Route::get('/admissions',[App\Http\Controllers\Pages\AdmissionsController::class,'index'])->name('admissions');

Route::get('/academics',[App\Http\Controllers\Pages\AcademicsController::class,'index'])->name('academics');

Route::get('/offices',[App\Http\Controllers\Pages\OfficesController::class,'index'])->name('offices');

Route::get('/contacts',[App\Http\Controllers\Pages\ContactController::class,'index'])->name('contacts');

//submenu (offices)

Route::get('/finance',[App\Http\Controllers\Offices\FinanceController::class,'index'])->name('finance');

Route::get('/library',[App\Http\Controllers\Offices\LibraryController::class,'index'])->name('library');

Route::get('/registrar',[App\Http\Controllers\Offices\RegistrarController::class,'index'])->name('registrar');

Route::get('/sacdev',[App\Http\Controllers\Offices\SACDEVController::class,'index'])->name('sacdev');

Route::get('/socdev',[App\Http\Controllers\Offices\SOCDEVController::class,'index'])->name('socdev');

//sumbenu (About)
Route::get('/map',[App\Http\Controllers\About\MapController::class,'index'])->name('map');
Route::get('/vision',[App\Http\Controllers\About\VisionController::class,'index'])->name('vision');
Route::get('/hymn',[App\Http\Controllers\About\HymnController::class,'index'])->name('hymn');
Route::get('/mission',[App\Http\Controllers\About\MissionController::class,'index'])->name('mission');
Route::get('/structure',[App\Http\Controllers\About\StructureController::class,'index'])->name('structure');
Route::get('/board',[App\Http\Controllers\About\BoardController::class,'index'])->name('board');
Route::get('/admin',[App\Http\Controllers\About\AdminController::class,'index'])->name('admin');


//submenu (academics)
Route::get('/basic-ed',[App\Http\Controllers\Academics\BasicEdController::class,'index'])->name('basic-ed');
Route::get('/flex-learning',[App\Http\Controllers\Academics\FlexLearningController::class,'index'])->name('flex-learning');
Route::get('/colleges',[App\Http\Controllers\Academics\CollegesController::class,'index'])->name('colleges');
Route::get('/commencement',[App\Http\Controllers\Academics\CommencementController::class,'index'])->name('commencement');

//submenu (admissions)
Route::get('/program',[App\Http\Controllers\Admission\ProgramController::class,'index'])->name('program');
Route::get('testing',[App\Http\Controllers\Admission\TestingController::class,'index'])->name('testing');
Route::get('scholarshp',[App\Http\Controllers\Admission\ScholarshipController::class,'index'])->name('scholarship');

//submenu (news)

Route::get('/news1',[App\Http\Controllers\News\News1Controller::class,'index'])->name('news1');
Route::get('/news2',[App\Http\Controllers\News\News2Controller::class,'index'])->name('news2');
Route::get('/news3',[App\Http\Controllers\News\News3Controller::class,'index'])->name('news3');
Route::get('/news4',[App\Http\Controllers\News\News4Controller::class,'index'])->name('news4');
Route::get('/news5',[App\Http\Controllers\News\News5Controller::class,'index'])->name('news5');
Route::get('/news6',[App\Http\Controllers\News\News6Controller::class,'index'])->name('news6');


//admin

Route::prefix('/admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);

    Route::get('/users',[App\Http\Controllers\Admin\UsersController::class,'index'])->name('users');
    
    Route::get('users/edit/{id}',[App\Http\Controllers\Admin\UsersController::class,'edit'])->name('users.edit');
    
    Route::delete('users/delete/{id}',[App\Http\Controllers\Admin\UsersController::class,'destroy'])->name('users.destroy');
    
    Route::get('users/create',[App\Http\Controllers\Admin\UsersController::class,'create'])->name('users.create');
    
    Route::get('users/show',[App\Http\Controllers\Admin\UsersController::class,'show'])->name('users.show');
    
    Route::post('users/store',[App\Http\Controllers\Admin\UsersController::class,'store'])->name('users.store');
    
    Route::put('users/update',[App\Http\Controllers\Admin\UsersController::class,'update'])->name('users.update');
});

  

