<?php
/**
 * Documentation
 * @author nagara
 * config database wrapper useing mysqli object dont change this code but if error dont worry, 
 * cause u can config apps name and database in file .env or envirotment variabel
 */
$config_db = [
    'db_host'       => (!empty($_ENV['DB_HOST'])) ? $_ENV['DB_HOST'] : 'localhost',
    'db_port'       => (!empty($_ENV['DB_PORT'])) ? $_ENV['DB_PORT'] : 3306,
    'db_name'       => (!empty($_ENV['DB_NAME'])) ? $_ENV['DB_NAME'] : '',
    'db_user'       => (!empty($_ENV['DB_USER'])) ? $_ENV['DB_USER'] : 'root',
    'db_password'   => (!empty($_ENV['DB_PASS'])) ? $_ENV['DB_PASS'] : '',
];

/**
 * connection
 * @return connection
 */
function database()
{
    global $config_db;

    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;
    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

    // / Create connection
    try {

        $conn = new mysqli($config_db['db_host'], $config_db['db_user'], $config_db['db_password'], $config_db['db_name']) or die('try again in some minutes, please');
        
        if ($conn->connect_error) {
            throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
            exit();
        }

        /* check if server is alive */
        if ($conn->ping()) {
            printf ("Our connection is 200 ok!\n");
        } else {
            printf ("Error: %s\n", $conn->error);
            throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
        }

    } catch (\mysqli_sql_exception $e) {
        echo $e->getMessage();
        exit;
    }
}