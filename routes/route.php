<?php

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function() {
    // call view
    view("welcome");
});
$router->get('hello', function() {
    echo 'Hello ' ;
});
$router->get('about', function() {
    echo 'about ' ;
});

// Run it!
$router->run();