<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/student/{id}', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/student/{edit}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::post('/student/{id}/restore', [StudentController::class, 'restore'])->name('student.restore');

    Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/teacher/{id}', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::put('/teacher/{edit}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
    Route::post('/teacher/{id}/restore', [TeacherController::class, 'restore'])->name('teacher.restore');

    Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/department/{id}', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/department/{id}', [DepartmentController::class, 'show'])->name('department.show');
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::put('/department/{edit}', [DepartmentController::class, 'update'])->name('department.update');
    Route::delete('/department/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');
    Route::post('/department/{id}/restore', [DepartmentController::class, 'restore'])->name('department.restore');

    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course/{id}', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/course/{edit}', [CourseController::class, 'update'])->name('course.update');
    Route::delete('/course/{id}', [CourseController::class, 'destroy'])->name('course.destroy');
    Route::post('/course/{id}/restore', [CourseController::class, 'restore'])->name('course.restore');
});

require __DIR__.'/auth.php';
