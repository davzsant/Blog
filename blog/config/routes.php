<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->get("/",['controller'=>'Home','action'=> 'index'],"home.index");
    $routes->scope("/users", function (RouteBuilder $routes){
        $routes->get("/",['controller'=>'Users','action'=> 'index'],"users.index");
        $routes->get("/{id}",['controller'=>'User','action'=> 'show'],"user.show");
    });
    $routes->scope("/posts", function (RouteBuilder $routes): void {
        $routes->get("/",['controller'=>'Posts','action'=> 'index'],'posts.index');
        $routes->get("/{id}",['controller'=>'Post','action'=> 'show'],"post.show");
    });

    $routes->get("/scrap",['controller'=>'Webscrapping','action'=> 'index'],"webscrap.index");
};
