<?php
namespace Routing;
class Router {
    private $routes = [];

    public function addRoute($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function dispatch($requestPath) {
        if (array_key_exists($requestPath, $this->routes)) {
            call_user_func($this->routes[$requestPath]);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}