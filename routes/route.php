<?php

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function() {
    echo "root";
});
$router->get('hello', function() {
    echo 'Hello ' ;
});
$router->get('about', function() {
    echo 'about ' ;
});

// Run it!
$router->run();