<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('student', [
        'name' => 'Sam',
        'course' => 'BSIT',
        'subjects' => ['Programming', 'Database', 'Networking', 'Multimedia', 'Computer Science'],
        'isEnrolled' => true // false = not enrolled, true = enrolled
    ]);
});
