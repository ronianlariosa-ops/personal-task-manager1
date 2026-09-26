<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>

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

        .detail {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            margin-top: 5px;
            font-size: 18px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
        }

        .edit {
            background: #f59e0b;
            color: white;
        }

        .back {
            background: #6b7280;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Task Details</h1>

    <div class="detail">
        <div class="label">Task Name</div>
        <div class="value">{{ $task->task_name }}</div>
    </div>

    <div class="detail">
        <div class="label">Description</div>
        <div class="value">
            {{ $task->description ?? 'No description' }}
        </div>
    </div>

    <div class="detail">
        <div class="label">Status</div>
        <div class="value">{{ $task->status }}</div>
    </div>

    <div class="detail">
        <div class="label">Due Date</div>
        <div class="value">
            {{ $task->due_date ?? 'No due date' }}
        </div>
    </div>

    <a href="{{ route('tasks.edit', $task) }}" class="btn edit">
        Edit Task
    </a>

    <a href="{{ route('tasks.index') }}" class="btn back">
        Back to Tasks
    </a>

</div>

</body>
</html>