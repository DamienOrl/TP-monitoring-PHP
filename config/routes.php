<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes -> add('index', new Route('/',[

]));
$routes -> add('admin', new Route('/admin',[

]));

return $routes;
?>