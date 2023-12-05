<?php

use App\Livewire\CreateNote;
use App\Livewire\EditNote;
use App\Livewire\ShowNotes;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/notes', ShowNotes::class)
    ->middleware(['auth', 'verified'])
    ->name('notes.index');

Route::get('/notes/create', CreateNote::class)
    ->middleware(['auth', 'verified'])
    ->name('notes.create');

Route::get('/notes/edit/{note}', EditNote::class)
    ->middleware(['auth', 'verified'])
    ->name('notes.edit');

require __DIR__.'/auth.php';
