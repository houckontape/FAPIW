<?php

namespace Routes;
use Routing\Router;
class routes
{
    public Router $router;

    public $pathes;

    function __construct(Router $router){
        $this->router=$router;
        // TODO recuperer les routes du projet sous forme de tableau
        // ('path'=>[ controllerName=>'nom function'])
    }


    public function InitRoutes(){
        foreach($this->pathes as $path=>$callback){
            $this->router->addRoute($path,$callback);
        }
    }

}