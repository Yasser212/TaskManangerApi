<?php

namespace App\Controllers;

class TaskController
{
    private $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function createTask($data)
    {
        return $this->taskService->create($data);
    }

    public function getAllTasks()
    {
        return $this->taskService->getAll();
    }

    public function index()
    {
        return "Hello, Tasks!";
    }

    // Weitere Methoden wie editTask(), deleteTask()
}