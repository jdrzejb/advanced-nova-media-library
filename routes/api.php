<?php

use Jdrzejb\AdvancedNovaMediaLibrary\Http\Controllers\DownloadMediaController;
use Jdrzejb\AdvancedNovaMediaLibrary\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/download/{media}', [DownloadMediaController::class, 'show']);

Route::get('/media', [MediaController::class, 'index']);
