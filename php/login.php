<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost','root','Rutik@1213b','ChatConnect');

$email = $_POST["email"];
$pass = $_POST["password"];
$link_address='../sign-up.html';
$link_address_two = '../dashboard/adminpanel.html';

$sql_u = "SELECT * FROM user_signup WHERE user_email='$email' AND user_password='$pass'";
//$sql_e = "SELECT * FROM users WHERE email='$email'";
$res_u = mysqli_query($con, $sql_u);
//$res_e = mysqli_query($db, $sql_e);

if (mysqli_num_rows($res_u) > 0) {
    $query = "INSERT INTO user_login (user_email, user_password) 
                VALUES ('$email', '$pass')";
    $results = mysqli_query($con, $query);
    echo "<a href='$link_address_two'>Go to Admin Panel</a>"; 	
}
else{   
    echo "<a href='$link_address'>Click here for Signup</a>";
}


?>