
<?php 
// include files all requestes r going through index.php
const BASE_PATH = __DIR__.'/../'; 
require BASE_PATH.'Core/functions.php';
// importing classes that have not been already manualy required (classes that r generic)
spl_autoload_register(function ($class) {
    // Core\Database
        $class = str_replace('\\','/', $class);

        require base_path("{$class}.php");
        
});
$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; // either delete or get & post
print_r($method);
$router->route($uri, $method);

?>