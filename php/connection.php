<?php 


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DB_HOST", "localhost");
define("DB_USERNAME", "chatcpix_Pranay");
define("DB_PASSWORD", "Abcd1234");
define("DB_NAME", "chatcpix_ChatConnect");
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect." .mysqli_connect_error());
}


?>