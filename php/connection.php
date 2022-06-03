<?php 

$servername = "localhost";
$username = "Root_Rutik";
$password = "Rutik@1213b";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>