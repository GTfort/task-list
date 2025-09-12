<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(route('index.task'));
});
Route::get('/task', function () {

    $tasks = Task::latest()->get();
    return view('index', ['tasks' => $tasks]);
})->name('index.task');

Route::view('/tasks/create', 'create')->name('create.task');

Route::post('/tasks', function (Request $request) {

    $attributes = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
        'completed' => 'sometimes|boolean',
    ]);

    Task::create($attributes);

    return redirect(route('index.task'))->with('success', 'Task created successfully!');
})->name('store.task');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);

    return view('show', ['task' => $task]);
})->name('show.task');
