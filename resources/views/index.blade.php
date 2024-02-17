@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div>
        @forelse ($tasks as $task)
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                <div class="tasklist">
                    {{ $task->title }}
                </div>
            </a>
        @empty
            <div>
                Add some task
            </div>
        @endforelse
    </div>
@endsection
