<?php

require_once '../app/core/router.php';

use App\core\Router;

$router = new Router();

$router->add('GET','/students/create','StudentsController','create');
$router->add('GET','/students','StudentsController','index');
$router->add('GET','/students/{id}','StudentsController','show');
$router->add('GET','/students/{id}/edit','StudentsController','edit');

$router->run();