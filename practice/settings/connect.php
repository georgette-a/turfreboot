<?php

//connect.php

/**
 * Requiring credentials
*/
/**
 * PDO options / configuration details.
 * I'm going to set the error mode to "Exceptions".
 * I'm also going to turn off emulated prepared statements.
 */
require('db_cred.php');
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

/**
 * Connect to MySQL and instantiate the PDO object.
 */
$pdo = new PDO(
    "mysql:host=" . SERVER . ";dbname=" . DATABASE, //DSN
    USERNAME, //Username
    PASSWD, //Password
    $pdoOptions //Options
);

//The PDO object can now be used to query MySQL.