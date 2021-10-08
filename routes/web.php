<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

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
//     return view('welcome');
// });

// Route::middleware('auth')->group(function(){


// });
Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::post('/course', [CourseController::class, 'store'])->name(
    'course.store'
);
Route::delete('/course/{course}', [CourseController::class, 'delete'])->name(
    'course.delete'
);

Route::get('/course',[HomeController::class, 'show'])->name('course.show');

Route::get('/course/{course}', [CourseController::class, 'edit'])->name(
    'course.edit'
);
Route::put('/course/{course}', [CourseController::class, 'update'])->name(
    'course.update'
);


Route::get('/course/attend/{section}', [CourseController::class, 'showsection'])->name(
    'course.section'
);
Route::post('/course/attend', [CourseController::class, 'attend'])->name(
    'course.attend'
);

Route::get('/student/{course}',[CourseController::class, 'show'])->name('course.single');

Route::get('/student/{course}/pricing',[CourseController::class, 'showPrice'])->name('student.pricing');

Route::get('/staff/login',function(){
    return view('admin.layouts.login');
})->name('staff.login');


Route::post('/staff',[StaffController::class,'login'])->name('staff.store');
Route::post('/staff/login',[StaffController::class,'logout'])->name('staff.logout');

Route::resource('teacher',TeacherController::class);

Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
