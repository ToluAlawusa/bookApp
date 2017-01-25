<?php

session_start();

# require autoload from vendor and go back one path by using .. because index.php is inside a path before vendor
require '../vendor/autoload.php';

use Dotenv\Dotenv as Dotenv;
$dotenv = new Dotenv(dirname(__DIR__));
$dotenv->load();

use Brainfood\libs\database as DB;
 DB::connect();

# registering pretty handler for whoops inside index.php
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

# instatiating an altorouter for routing 
$router = new \AltoRouter();

# including routes.php in index.php
include($_ENV['APP_PATH']."/routes/routes.php");

# matching my routes
$match = $router->match();
 
# at this point, explode $match at @ in the array, splitting target from params
list($controller, $method) = explode("@", $match['target']);

$obj = NULL; # a placeholder for the object reference which will be used down the line

if(is_callable($controller,$method)){
        $obj = new $controller;
        call_user_func_array([$obj, $method], $match['params']);

   } else {

   	echo "cannot call '.$controller->$method'. ";

   }
