<?php
include '../php/connection.php';

$business_name = $_POST['bname'];
$business_add = $_POST['baddress'];
$business_email = $_POST['bemail'];
$business_phone = $_POST['bphoneno'];
$business_city = $_POST['bcity'];
$business_state = $_POST['bstate'];
$business_country = $_POST['bcountry'];
$business_pincode = $_POST['bzipcode'];
$business_type = $_POST['btype'];

// database insert SQL code
$sql = "INSERT INTO `business_register` (`business_name`, `business_address`, `business_email`, `business_phone`, `business_city`, `business_state`, `business_country`, `business_zipcode`, `business_type`) VALUES ('$business_name', '$business_add', '$business_email', '$business_phone', '$business_city', '$business_state', '$business_country', '$business_pincode', '$business_type')";

// insert in database 
$rs = mysqli_query($link,$sql);
if($rs )
{
	//echo '<script>alert("Data Inserted Successfully.")</script>';
    //header("Location: ../dashboard/adminpanel.html");
    echo "<script>
      window.location.href = 'http://chatconnect.io.in/dashboard/adminpanel.html';
      alert('Data Inserted Successfully.');
    </script>";
}
?>