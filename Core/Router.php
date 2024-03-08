<?php
// uri returns the path of the page were currently in
// $routing is a function that teests if were in the current page 
namespace Core;
class Router {
    protected $routes = [];
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);
    }
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

    }
    protected function abort($code = 404)
    {
        http_response_code($code);

        require base_path("views/{$code}.view.php");

        die();
    }
 }
//$routes = require base_path('routes.php');
//
//
//
//
//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
////$query = parse_url($_SERVER['REQUEST_URI'])['query']; // returns query (whats after the path)
//
//$routing = function($array,$key)
//{
//    if(array_key_exists($key,$array))
//    {
//        require base_path($array[$key]);
//
//
//    }
//};
//
//
//
//$routing($routes['routes'],$uri);
?>



