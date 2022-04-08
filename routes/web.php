<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// ROUTE //
Route::middleware(['auth',])->group(function () {
    //halaman home
    route::get('/', [StudentsController::class, 'index'])->name('home');
    //halaman table
    route::get('/student', [StudentsController::class, 'student'])->name('student');

    //tambah data
    route::get('/tambahstudent', [StudentsController::class, 'tambahstudent'])->name('tambahstudent');
    route::post('/insertdata', [StudentsController::class, 'insertdata'])->name('insertdata');

    //halaman detail
    route::get('/posts/{post}', [StudentsController::class, 'show'])->name('posts.show');

    //edit data
    route::get('/tampildata/{id}', [StudentsController::class, 'tampildata'])->name('tampildata');
    route::post('/updatedata/{id}', [StudentsController::class, 'updatedata'])->name('updatedata');

    //delete data
    route::get('/deletedata/{id}', [StudentsController::class, 'deletedata'])->name('deletedata');
});


route::get('/login', [UserController::class, 'login'])->name('login');
route::post('/loginuser', [UserController::class, 'loginuser'])->name('loginuser');
route::get('/register', [UserController::class, 'register'])->name('register');
route::post('/registeruser', [UserController::class, 'registeruser'])->name('registeruser');
route::get('/logout', [UserController::class, 'logout'])->name('logout');
