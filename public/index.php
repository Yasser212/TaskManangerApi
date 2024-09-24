<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\TaskController;

$controller = new TaskController();
echo $controller->index();