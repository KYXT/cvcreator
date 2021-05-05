<?php

use Illuminate\Support\Facades\Route;

Route::get('', 'CvController@index')->name('index');
Route::post('', 'CvController@store');

Route::get('part', 'CvController@part')->name('part');
Route::post('part', 'CvController@storePart');