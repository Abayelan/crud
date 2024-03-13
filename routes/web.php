<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DepartmentController;
use App\Models\Department;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('profile.dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/about', [ProductController::class, 'about'])->name('product.about');
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('profile.dashboard');

    //Products
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Planets
    Route::get('/planet', [PlanetsController::class, 'planetIndex'])->name('planets.planet');
    Route::get('/planets/create', [PlanetsController::class, 'createPlanet'])->name('planets.create');
    Route::post('/planets', [PlanetsController::class, 'storePlanet'])->name('planets.storePlanet');
    Route::get('/planets/{planets}/edit', [PlanetsController::class, 'edit'])->name('planets.edit');
    Route::put('/planets/{planets}/update', [PlanetsController::class, 'update'])->name('planets.update');
    Route::delete('/planets/{planets}/destroy', [PlanetsController::class, 'destroy'])->name('planets.destroy');

    //Students
    Route::get('/student', [StudentsController::class, 'student'])->name('students.student');
    Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
    Route::get('/students/{students}/edit', [StudentsController::class, 'edit'])->name('students.edit');
    Route::put('/students/{students}/update', [StudentsController::class, 'update'])->name('students.update');
    Route::delete('/students/{students}/destroy', [StudentsController::class , 'destroy'])->name('students.destroy');

    //Departments
    Route::get('/department', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/department/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/department', [DepartmentController::class, 'store'])->name('departments.store');
});

require __DIR__.'/auth.php';