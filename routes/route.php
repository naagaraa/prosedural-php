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
    // call view
    view("welcome");
});

$router->get('dashboard', function() {
    // call view
    view("backend.home");
});
$router->get('info', function() {
    phpinfo(INFO_GENERAL);
});
$router->get('about', function() {
    echo 'about ' ;
});

// Run it!
$router->run();