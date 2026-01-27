<?php
namespace App\core;

class router
{ 

    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // echo"{$method} {$uri}";
        if($method == 'GET' && $uri =='/students'){
            require_once './app/controllers/StudentsController.php';
            return;
        } 
        if($method == 'GET' && $uri =='/students/create'){

            return;
        }
        http_response_code(404);
        echo "<h1> - page not found</h1>";
    }

}
?>