<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',DashboardIndex::class)->name('Dashboard.Index');
