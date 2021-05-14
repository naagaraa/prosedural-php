<?php


require_once "vendor/autoload.php";


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


require_once "apps/init.php";
require_once "routes/route.php";
