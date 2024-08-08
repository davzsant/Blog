<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->connect("/",['controller'=>'Home','action'=> 'index'],['_name'=> "home.index"]);
};
