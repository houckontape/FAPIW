<?php

namespace Response;

class Response
{
    public function setStatusCode($code) {
        http_response_code($code);
    }

    public function send($body) {
        echo $body;
    }
}