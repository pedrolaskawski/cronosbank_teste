<?php

use App\Http\Controllers\OpportunityController;
use Illuminate\Support\Facades\Route;


Route::get('/opportunity', [OpportunityController::class, 'index'])->name('opportunity.index');
Route::post('/opportunity/send-lead', [OpportunityController::class, 'sendLead'])->name('opportunity.sendLead');

Route::get('/success', function () {
    return view('success');
})->name('success');
