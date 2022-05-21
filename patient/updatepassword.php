<?php
session_start();
include '../assets/conn.php';
$u=$_SESSION['pid'];
$p=$_POST['pass'];

$sql = "update patient set password='$p' where id='$u';";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong';
    $_SESSION['emsg'].=$errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
    $_SESSION['password']=$p;
    echo '<meta http-equiv="refresh" content="0; url=../loginpatient.php">';
	}
    
    
    ?>
