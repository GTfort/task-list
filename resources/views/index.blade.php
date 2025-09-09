<x-layout title="Task List || Home">
@if (empty($tasks))
    <p>There are no tasks</p>
@else
<h1>These are the available tasks</h1>
    @foreach ($tasks as $task)
    <a href="{{ route('show.task', ['id' => $task->id])  }}">{{ $task->title }}</a>
        <p></p>
    @endforeach
@endif
</x-layout>
