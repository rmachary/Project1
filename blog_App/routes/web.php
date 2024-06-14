<?php

use App\Http\Controllers\NoteControler;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [WelcomeController::class,'welcome'])->name('welcome');
// Route::get('/note', [NoteControler::class,'index'])->name('note.index');
// Route::get('/note/create', [NoteControler::class,'create'])->name('note.create');
// Route::post('/note/store', [NoteControler::class,'store'])->name('note.store');
// Route::get('/note/{id}', [NoteControler::class,'show'])->name('note.show');
// Route::get('/note/{id}/edit', [NoteControler::class,'edit'])->name('note.edit');
// Route::put('/note/{id}', [NoteControler::class,'update'])->name('note.update');
// Route::delete('/note/{i}', [NoteControler::class,'destroy'])->name('note.destroy');

Route::resource("note", NoteControler::class);