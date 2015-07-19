<?php

class Router {
  public static function Route($uri){
    global $routes;

    $route = explode('/',$uri);

    $class = $route[0].'Controller';
    $method = $route[1];
    $data = array_slice($route,2);

    if (class_exists($class)) {
      $controller = new $class();
      if (method_exists($controller,$method)){
        $controller->$method($data);
      } else die ("Error: There is no method called - $controller -> $class");
    } else die ("Error: There is no class called - $class");
  }
}
