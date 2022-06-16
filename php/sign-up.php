<?php

// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

include '../php/connection.php';

//error_reporting(0);



session_start();





// get the post records

$txtName = $_POST['fname'];

$txtEmail = $_POST['email'];

$txtPhone = $_POST['txtphone'];

$txtPassword = $_POST['txtpassword'];



//database insert SQL code

$sql = "INSERT INTO `user_signup` (`user_email`, `user_password`, `user_name`, `user_mobile`) VALUES ('$txtEmail','$txtPassword', '$txtName', '$txtPhone')";



// insert in database 

$rs = mysqli_query($con, $sql);

//$link_address='../log-in.html';

if($rs)

{

	//echo "<a href='$link_address'>Click here for login</a>";

	//header("Location: ../log-in.html");
	echo "<script>

      window.location.href = 'http://chatconnect.io.in/log-in.html';

      alert('Data Inserted Successfully.');

    </script>";


}





?>