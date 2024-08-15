<?php
require_once "vendor/autoload.php";
use Routing\Router;
use Request\Request;
use Response\Response;


$request = new Request();
$response = new Response();
$router = new Router();


$router->dispatch($request->getPath());

?>