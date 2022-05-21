<?php
session_start();
include '../assets/conn.php';
$u=$_SESSION['did'];
$p=$_POST['pass'];

$sql = "update doctor set specialization='$p' where did='$u';";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong';
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
        echo '<meta http-equiv="refresh" content="0; url=../logindoctor.php">';
	}
    
    
    ?>
