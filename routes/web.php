<?php

use App\Http\Controllers\FolderController;
use App\Http\Controllers\FileController;


//create folder
Route::get('/directories',function(){
    return view('directory');
});

Route::post('/add-folder',[FolderController::class, 'store']);

Route::get('/add-folder', function () {
    return view('create_folder');
});
//add sub-folder
Route::get('/add-sub-folder', function () {
    return view('create_sub_folder');
});
// view files
Route::get('/view-files/{type}',[FileController::class ,'viewFilesByType']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file-manager', function () {
    return view('file_manager');
});
Route::get('/add-files', function () {
    return view('get_file_upload_page');
});

Route::post('/submit-files', [FileController::class,'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
