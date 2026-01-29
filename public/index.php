<?php

require_once './app/core/router.php';
use App\core\router;

$router= new router();

$router->add('GET','/students/create','\App\controllers\StudentsController','create');
$router->add('GET','/students','\App\controllers\StudentsController','index');
$router->add('GET','/students/1','\App\controllers\StudentsController','index');

$router->run()

?>