<?php

class TaskService
{
    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function create($data)
    {
        // Validierung, Business-Logik
        return $this->taskRepository->save($data);
    }

    public function getAll()
    {
        return $this->taskRepository->getAll();
    }
}