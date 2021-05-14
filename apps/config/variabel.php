<?php
/**
 * Documentations 
 * @author nagara
 * IF you have define constant write this code
 * 
 */

$configuration = [
	"APP_NAME" => $_ENV["APP_NAME"],
	"APP_HOST" => $_ENV["APP_HOST"],
	"APP_URL" => $_ENV["APP_URL"],
];


// base-Url untuk asset
define('ASSET', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/public/');
// base-Url untuk URL
define('URL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');
// base-url untuh path
define('BASEURL', $configuration['APP_HOST'] . $configuration['APP_NAME'] . '/');