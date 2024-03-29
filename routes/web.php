<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\DashboardComponent::class)->name('dashboard');
Route::get('/bill-aons', App\Livewire\Bill\BillAonComponent::class)->name('bill-aon');
Route::get('/print-bill', App\Livewire\Bill\Aon\PrintComponent::class)->name('print-aon');
Route::get('/generate-pdf', [App\Http\Controllers\PrintAonController::class, 'generatePDF'])->name('pdf-aon');;