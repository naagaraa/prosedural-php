<?php
// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function() {
    // call view
    view("welcome");
});
$router->get('info', function() {
    phpinfo();
});
$router->get('about', function() {
    echo 'about ' ;
});

// Run it!
$router->run();