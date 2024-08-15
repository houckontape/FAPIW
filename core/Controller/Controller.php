<?php

namespace Controller;

use Controller\ControllerInterface;

class Controller implements ControllerInterface
{
    protected $request;
    protected $response;

    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }
    public function handle()
    {
        // TODO: Implement handle() method.
    }
}