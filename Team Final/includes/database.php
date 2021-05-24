<?php
/** Author: Vlad, Antonio, Solomon, & Kelvin
 *  Date: 11/15/2020
 *  Description: This PHP script connects to the MySQL database and select
 *  the elitedrives_db database. It also displays a user-friendly message if
 *  a connection error is encountered.
 */

//define parameters
$host = "localhost";
$login = "phpuser";
$password = "phpuser";
$database = "test4";

//Connect to the mysql server
$conn = @new mysqli($host, $login, $password, $database);

//handle connection errors
if ($conn->connect_errno != 0) {
    $errno = $conn->connect_errno;
    $errmsg = $conn->connect_error;
    die ("Connection failed with: ($errno) $errmsg.");
}

//$host = "localhost";
//$login = "admin";
//$password = "password";
//$database = "elitedrives_db";

//$host = "localhost";
//$login = "phpuser";
//$password = "phpuser";
//$database = "test4";