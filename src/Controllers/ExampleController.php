<?php

use Controller\Controller;

class ExampleController extends Controller
{
  public function index(){
      $this->response->send('Hello World');
  }
}