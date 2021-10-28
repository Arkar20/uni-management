<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\TeacherClientController;

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



Route::get('/staff/login',function(){
    return view('admin.layouts.login');
})->name('staff.login');


Route::post('/admin/',[StaffController::class,'login'])->name('staff.store');
Route::post('/admin/login',[StaffController::class,'logout'])->name('staff.logout');

Route::prefix('admin')->middleware('admin')->group(function(){

    
Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/course', [CourseController::class, 'index'])->name('staff.course');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course', [CourseController::class, 'store'])->name(
    'course.store'
);


Route::patch('/course/{course}/update', [CourseController::class, 'update'])->name(
    'course.update'
);

Route::get('/course/{course}', [CourseController::class, 'edit'])->name(
    'course.edit'
);
Route::delete('/course/{course}', [CourseController::class, 'delete'])->name(
    'course.delete'
);
Route::resource('section',SectionController::class);
Route::resource('teacher',TeacherController::class);

Route::get('/students',[StudentAdminController::class,'index'])->name('admin.students');

});


//student section
Route::get('/course/attend/{section}', [CourseController::class, 'showsection'])->name(
    'course.section'
);
Route::post('/course/attend', [CourseController::class, 'attend'])->name(
    'course.attend'
);



Route::get('/course',[HomeController::class, 'show'])->name('course.show');


Route::get('/student/{course}',[CourseController::class, 'show'])->name('course.single');

Route::get('/student/{course}/pricing',[CourseController::class, 'showPrice'])->name('student.pricing');


Route::get('/',[HomeController::class,'index']);

Route::get("/profile",[StudentController::class,'index'])->name('student.profile');
Route::post("/profile/edit",[StudentController::class,'update'])->name('student.update');

Route::get('/check/{id}',function(){
   if(strpos(Route::currentRouteName(),'check') !== false){
       return 'true';
   }
})->name('check');



//teacher sections

Route::get('/teacher/login',[TeacherAuthController::class,'index'])->name('teacher.loginview');
Route::post('/teacher/store',[TeacherAuthController::class,'store'])->name('teacher.login');

Route::prefix('teacher')->middleware('teacher')->group(function(){
Route::post('/logout',[TeacherAuthController::class,'logout'])->name('teacher.logout');


Route::get('/course/{course}',[TeacherClientController::class,'edit'])->name('teacher.assignmentform');
Route::post('/course/{course}/assign',[AssignmentController::class,'store'])->name('teacher.assign');
Route::put("/update",[TeacherClientController::class,'update'])->name('teacher.update');
Route::get("/profile",[TeacherClientController::class,'show'])->name('teacher.profile');
Route::get('/',[TeacherClientController::class,'index'])->name('teacher.index');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
