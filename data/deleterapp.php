<?php
session_start();
include '../assets/conn.php';

$p=$_POST['did'];

$sql = "delete from reqapp where reqid='$p' ;";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong'.$errorr;
    echo $errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Deleted';
        echo '<meta http-equiv="refresh" content="0; url=../patient/patient.php">';
	}
    
    
    ?>
