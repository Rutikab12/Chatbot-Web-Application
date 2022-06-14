<?php 
include '../php/connection.php';

$admin_name = $_POST['admin_name'];
$admin_role = $_POST['admin_role'];

// database insert SQL code
$sql = "INSERT INTO `business_admin` (`admin_name`, `admin_role`) VALUES ('$admin_name', '$admin_role')";

// insert in database 
$rs = mysqli_query($link, $sql);
//$link_address='../log-in.html';
if($rs )
{
	echo '<script>alert("Data Inserted Successfully.")</script>';
}

?>