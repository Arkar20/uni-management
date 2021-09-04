<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::post('/course', [CourseController::class, 'store'])->name(
    'course.store'
);
Route::delete('/course/{course}', [CourseController::class, 'delete'])->name(
    'course.delete'
);
Route::get('/course/{course}', [CourseController::class, 'edit'])->name(
    'course.edit'
);
Route::put('/course/{course}', [CourseController::class, 'update'])->name(
    'course.update'
);

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';
