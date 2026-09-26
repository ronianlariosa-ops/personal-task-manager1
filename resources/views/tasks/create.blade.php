<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            height: 120px;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .save {
            background: #2563eb;
            color: white;
        }

        .back {
            background: #6b7280;
            color: white;
        }

        .error {
            color: #dc2626;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add New Task</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tasks" method="POST">

        @csrf

        <label for="task_name">Task Name</label>
        <input
            type="text"
            id="task_name"
            name="task_name"
            value="{{ old('task_name') }}"
            required
        >

        <label for="description">Description</label>
        <textarea
            id="description"
            name="description"
        >{{ old('description') }}</textarea>

        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>

        <label for="due_date">Due Date</label>
        <input
            type="date"
            id="due_date"
            name="due_date"
            value="{{ old('due_date') }}"
        >

        <button type="submit" class="btn save">
            Save Task
        </button>

        <a href="{{ route('tasks.index') }}" class="btn back">
            Back
        </a>

    </form>

</div>

</body>
</html>