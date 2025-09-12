<x-layout title="Create New Task">
    <h1>Create a New Task</h1>

    <form action="{{ route('store.task') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Short Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div>
            <label for="long_description">Long Description (optional):</label>
            <textarea name="long_description" id="long_description"></textarea>
        </div>

        <div>
            <label for="completed">Completed:</label>
            <select name="completed" id="completed">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <button type="submit">Create Task</button>
    </form>
</x-layout>
