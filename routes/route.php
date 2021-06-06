<?php
/**
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * Documentation routing
 * @author nagara
 * @return view
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * 
 * pada routing hanya memanggil view saja, controller dan model dilakukan pada file view
 * 
 */

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
$router->get('/', function() {
    view("welcome");
});

$router->get('login', function() {
    view("auth/login");
});


// Run it!
$router->run();