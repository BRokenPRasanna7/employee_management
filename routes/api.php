<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/employees/create', [EmployeeController::class, 'store']);
    Route::get('/employees/list', [EmployeeController::class, 'index']);
    Route::post('/employees/show', [EmployeeController::class, 'show'])->name('employees.show');

    Route::post('/departments/create', [DepartmentController::class, 'store']);
    Route::get('/departments/list', [DepartmentController::class, 'index']);
    Route::get('/departments/dropdown', [DepartmentController::class, 'departmentDropdown']);
});
