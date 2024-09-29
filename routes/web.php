<?php
use App\Http\Controllers\PrimerController;
Route::get('/mi-primer-controller/{texto}', [PrimerController::class, 'index']);
