{{-- <div>
    This is blade template!
</div>

@isset($name)
    <div>
        Welcome back {{ $name }}
    </div>
@endisset --}}

<style>
    div {
        font-family: 'Poppins'
    }

    h1 {
        color: rgb(173, 80, 255);
    }

    a {
        text-decoration: none;
        text-decoration-color: none
    }

    .tasklist {
        width: 100%;
        height: 24px;
        padding: 12px;
        border: solid black 1px;
        margin-bottom: 10px;
        border-radius: 8px;
    }

    .tasklist:hover {
        background-color: rgb(173, 80, 255);
        color: white
    }

    .tasklist:active {
        background-color: rgb(148, 25, 255);
    }
</style>

<div style="padding: 30px 60px">
    <h1>Task List</h1>

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
