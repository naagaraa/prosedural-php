<?php
 /** 
 *------------------------------------------------------------------------------------------------------
 * generate env
 * @author nagara 
 *------------------------------------------------------------------------------------------------------
 *
 * generate folder directory after install via composer
 */


function create_env()
{
    /**
     * Handle untuk create automation file .env
     * untuk create env project sesuai folder project
     */
    $path = dirname(__FILE__, 3);

    $newpt = str_replace("\\","/", $path);
    
    $dir = explode('/', $newpt);
    $new_project = end($dir);

    if (file_exists($newpt . '//.env')) {
        print("file sudah ada");
        // $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
        // $txt = "# config file .env untuk configurasi pada file\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=local\nAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_FOLDER=/" . $new_project . "/\nAPP_HOST=http://localhost/\nAPP_URL=http://localhost/" . $new_project . "/\n\n# configurasi Database here\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=" . $new_project . "\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME='$"."{". "APP_NAME"."}'";

        // fwrite($FileEnvirotmentVariabel, $txt);
        // fclose($FileEnvirotmentVariabel);
    } else {
        $FileEnvirotmentVariabel = fopen($newpt . '//.env', "w") or die("Unable to open file!");
        $txt = "# config file .env untuk configurasi pada file\n# apps/config/database.php\n# apps/config/constant.php\n\nAPP_DEBUG=true\nAPP_ENV=local\nAPP_MAINTENANCE=off\n\n# configurasi Path here\nAPP_NAME=" . $new_project . "\nAPP_FOLDER=/" . $new_project . "/\nAPP_HOST=http://localhost/\nAPP_URL=http://localhost/" . $new_project . "/\n\n# configurasi Database here\nDB_HOST=localhost\nDB_PORT=3306\nDB_NAME=\nDB_USERNAME=root\nDB_PASSWORD=\n\n# configurasi mailer (on development)\nMAIL_DEBUG=true\nMAIL_MAILER=smtp\nMAIL_HOST=mailhog\nMAIL_PORT=1025\nMAIL_USERNAME=null\nMAIL_PASSWORD=null\nMAIL_ENCRYPTION=null\nMAIL_FROM_ADDRESS=null\nMAIL_FROM_NAME='$"."{". "APP_NAME"."}'";

        fwrite($FileEnvirotmentVariabel, $txt);
        fclose($FileEnvirotmentVariabel);
    }
}

create_env();