<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\DashboardComponent::class)->name('dashboard');

Route::get('/core-cus', App\Livewire\Corebanking\CustomerComponent::class)->name('core-cus');

Route::get('/bill-mops', App\Livewire\Bill\BillMorpComponent::class)->name('bill-morp');

Route::get('/bill-aons', App\Livewire\Bill\BillAonComponent::class)->name('bill-aon');
Route::get('/create-aons', App\Livewire\Bill\Aon\CreateComponent::class)->name('create-aon');
Route::get('/edit-aons/{id}', App\Livewire\Bill\Aon\EditComponent::class)->name('edit-aon');
Route::get('/print-bill/{id}', App\Livewire\Bill\Aon\PrintComponent::class)->name('print-aon');
Route::get('/print-bill-old/{id}', App\Livewire\Bill\Aon\PrintOldComponent::class)->name('print-aon-old');
Route::get('/generate-pdf/{id}', [App\Http\Controllers\PrintAonController::class, 'generatePDF'])->name('pdf-aon');

Route::get('/bill-morp-sit-aons', App\Livewire\Bill\BillMorpSitComponent::class)->name('bill-morp-sit-aon');