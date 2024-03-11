<?php

// phpinfo();

$DB_TYPE = 'mysql'; //Type of database<br>
$DB_HOST = 'localhost'; //Host name<br>
$DB_USER = 'root'; //Host Username<br>
$DB_PASS = ''; //Host Password<br>
$DB_NAME = 'blog'; //Database name<br><br>

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}


// if (function_exists('mysqli_connect')) {
//     echo "MySQLi extension is enabled.";
// } else {
//     echo "MySQLi extension is NOT enabled.";
// }

// try {
//     $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: "
//         . $e->getMessage();
// }
?>