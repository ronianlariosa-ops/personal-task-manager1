<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #222;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-edit {
            background: #f59e0b;
            color: white;
        }

        .btn-delete {
            background: #dc2626;
            color: white;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #1f2937;
            color: white;
        }

        .pending {
            background: #fef3c7;
            color: #92400e;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .completed {
            background: #dcfce7;
            color: #166534;
            padding: 5px 10px;
            border-radius: 20px;
        }

        .actions {
            display: flex;
            gap: 6px;
        }

        form {
            display: inline;
        }

        @media (max-width: 700px) {
            body {
                padding: 15px;
            }

            table {
                font-size: 13px;
            }

            th, td {
                padding: 8px;
            }

            .top-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="top-bar">
        <h1>Personal Task Manager</h1>

        <a href="/tasks/create" class="btn btn-primary">
            + Add Task
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($tasks->count() > 0)

        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->task_name }}</td>

                        <td>{{ $task->description ?? 'No description' }}</td>

                        <td>
                            @if($task->status === 'Completed')
                                <span class="completed">Completed</span>
                            @else
                                <span class="pending">Pending</span>
                            @endif
                        </td>

                        <td>
                            {{ $task->due_date ?? 'No due date' }}
                        </td>

                        <td>
                            <div class="actions">

                                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-edit">Edit</a>
                                   class="btn btn-edit">
                                    Edit
                                </a>

                               <form action="/tasks/{{ $task->id }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this task?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-delete">
                                        Delete
                                    </button>

                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <div style="background:white; padding:30px; text-align:center;">
            <h2>No tasks yet</h2>
            <p>Create your first task to get started.</p>

            .create') }}" class="btn btn-primary">
                Add Your First Task
            </a>
        </div>

    @endif

</div>

</body>
</html><a href="{{ route('tasksbtn-editbtn-editbtn-editbtn-editbtn-editbtn-edit