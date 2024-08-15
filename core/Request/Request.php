<?php

namespace Request;

class Request
{
    public function getPath() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
}