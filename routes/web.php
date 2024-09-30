<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;


Route::get('/', [AuthController::class, 'mainpage'])->name('mainpage');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Route::get('/mainpage', [AuthController::class, 'mainpage'])->middleware('auth')->name('mainage');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/homepage', function () {
        return view('homepage');
    })->name('homepage');
    
    Route::get('/notes/category/{category}', [NoteController::class, 'category'])->name('notes.category');
    Route::get('/notes/personal', [NoteController::class, 'personal'])->name('notes.personal');
    Route::get('/notes/work', [NoteController::class, 'work'])->name('notes.work');
    Route::get('/notes/study', [NoteController::class, 'study'])->name('notes.study');
    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
    Route::get('/notes/recentnotes', [NoteController::class, 'recentNotes'])->name('notes.recentnotes');
    Route::resource('comments', CommentController::class);
    


    
    Route::resource('notes', NoteController::class);
});
    Route::resource('users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
