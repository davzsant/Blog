<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->get("/",['controller'=>'Home','action'=> 'index'],"home.index");
    $routes->scope("/users", function (RouteBuilder $routes){
        $routes->get("/",['controller'=>'Users','action'=> 'index'],"users.index");
        $routes->get("/{id}",['controller'=>'User','action'=> 'show'],"user.show");
    });
};
