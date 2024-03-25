<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Student;
use GuzzleHttp\Promise\Create;

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

Route::get('/students', function () {
    return view('index');
});

Route::get('students', [C_Student::class, 'index']);

Route::get('add-student', [C_Student::class, 'create']);

Route::post('add-student', [C_Student::class, 'store']);

Route::get('edit-student/{id}', [C_Student::class, 'edit']);

Route::put('update-student/{id}', [C_Student::class, 'update']);

Route::delete('delete-student/{id}', [C_Student::class, 'delete']);
