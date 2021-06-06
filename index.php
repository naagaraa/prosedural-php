<?php

 /**
 *-----------------------------------------------------------------------------------------------
 * composer autoload
 * @return library
 * @author miyuki nagara
 *-----------------------------------------------------------------------------------------------
 * Melakuka Required file bootstrap library package
 *
 */

require_once "vendor/autoload.php";

 /**
 *-----------------------------------------------------------------------------------------------
 * ENV Configuration
 * @return env
 * @author miyuki nagara
 *-----------------------------------------------------------------------------------------------
 * Melakuka Required autoload config enviroment variabel
 *
 */

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


 /**
 *-----------------------------------------------------------------------------------------------
 * Core Application
 * @return config
 * @author miyuki nagara
 *-----------------------------------------------------------------------------------------------
 * melakukan reuire file core
 *
 */

require_once "apps/init.php";
require_once "routes/route.php";
