<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    // The index view uses static sample data for now.
    return view('students.index');
});

// Show create form
Route::get('/students/create', function () {
    return view('students.create');
});

// Show student details (static sample data)
Route::get('/students/{id}', function ($id) {
    $samples = [
        1 => ['name' => 'Vergara, Christian Paul', 'email' => 'vergara@example.com', 'course' => 'Bachelor of Science in Information Technology', 'year' => '2'],
    ];
    $student = $samples[$id] ?? ['name' => 'Unknown', 'email' => 'unknown@example.com', 'course' => '-', 'year' => '-'];

    return view('students.show', compact('student'));
});



// Edit studend 
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit', compact('id'));
});