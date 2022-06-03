<?php 

session_start();
session_destroy();

$link_address='../index.html';
echo "<a href='$link_address'>Go to Home</a>";

?>