<?php


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password

$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS hosp";
if ($conn->query($sql) === TRUE) {
echo '<hr style="  border: 1px solid green;width: 1%;">';
} else {
  
echo '<hr style="  border: 1px solid red;width: 1%;">' . $conn->error;
}

$conn->close();
include './assets/tableschema.php';
include 'conn.php';
?>