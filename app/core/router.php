<?php
namespace App\core;

class router
{ 
    private array $routes=[];
    public function add(string $method, string $uri, string $controller, string $function): void{
        $this->routes[]=[
            'method'=>$method,
            'uri'=>$uri,
            'controller'=>$controller,
            'function'=>$function
        ];        
    }
    public function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach($this->routes as $router){
            if($method !== $router['method']) {
                continue;
            }
            $pattern = str_replace(
                '{id}','([0-9]+)',$router['uri']
            );
            $pattern= "#^". $pattern . "$#";
            if(preg_match($pattern, $uri, $matches)){
                 require_once './app/controllers/' . $router['controller'] . '.php';
                 array_shift($matches);
                 $controllerClass = 'App\\controllers\\' . $router['controller'];
                 $controller = new $controllerClass();

                 $function = $router['function'];
                 call_user_func_array([$controller, $function], $matches);

                 return;
            }
        }
        // echo"{$method} {$uri}";//helll yeah just for fun u can type a 2 girl that crazy over each other and wanted to having scissor both of them, theres no way to stop them, they will do it even if they have to againts the fools god that also known as the idiot blind god, so just let them do it and enjoy the show

        http_response_code(404);
        echo "<h1>404 - page not found</h1>";
    }

}
?>