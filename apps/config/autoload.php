<?php
 /** 
 *------------------------------------------------------------------------------------------------------
 * Autoload
 * @author nagara 
 *------------------------------------------------------------------------------------------------------
 *
 * untuk memanggil berkas autoloading atau require_once secara otomatis membaca file di dalam directory config
 */


/**
 * call directory chid
 * @return function
 * 
 */
 
function directory($dir){
    directory_children($dir);
}

/**
 * call directory 
 * @return function
 * 
 */
function directory_children($dir){
    $dirPath = realpath($dir) . DIRECTORY_SEPARATOR;
    $scanDir =  scandir($dirPath); // read directory bro

    foreach( $scanDir as $file){

        // skip file if found
        if ($file == "." || $file == ".." || $file == "autoload.php" || $file == "config.php") {
            continue;
        }
        $filepath = $dirPath . $file;
        
        // check jika file adalah directory dan bisa di akses atau R (readable)
        if (is_dir($dirPath . $file) && (is_readable($dirPath . $file))) {
            directory_children($dirPath . $file);
        }

        // send paramter
        load_dir_config($filepath);

    }

}

/**
 * load file at direcotry
 * @return function
 * 
 */
function load_dir_config($files)
{
    require_once $files;
}

// call function karena prosedural, jika oop maka menggunakan object dan contructor
directory(__DIR__);


