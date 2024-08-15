<?php
require_once "vendor/autoload.php";

use src\Route;
use Routing\Router;
use Request\Request;
use Response\Response;


$request = new Request();
$response = new Response();
$router = new Router();
$route= new Route();


$router->dispatch($request->getPath());

?>