# Personal Task Manager

A Laravel-based Personal Task Manager developed for the Laravel Mini Project.

## Project Information

- **Project Code:** WST21-PM-2026-SF
- **Student Name:** Ronian Lariosa
- **Course & Year:** [Enter your Course & Year]
- **Database Used:** SQLite

## Project Description

The Personal Task Manager is a Laravel web application that allows users to manage personal tasks.

The project demonstrates the basic Laravel flow:

**Routes → Controller → Model → Database → Blade Views**

## Features

- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Task Status
- Pending / Completed status
- Task description
- Due date

## Technologies Used

- Laravel
- PHP
- SQLite
- Blade
- HTML
- CSS
- Eloquent ORM

## Database

The application uses **SQLite**.

The `tasks` table contains:

- `id`
- `task_name`
- `description`
- `status`
- `due_date`
- `created_at`
- `updated_at`

## Laravel Structure

### Routes

The application uses Laravel resource routes for task management.

### Controller

`TaskController` handles:

- Displaying tasks
- Creating tasks
- Storing tasks
- Editing tasks
- Updating tasks
- Deleting tasks

### Model

The `Task` model manages task data using Laravel Eloquent.

### Views

Blade views are located in:

```text
resources/views/tasks/