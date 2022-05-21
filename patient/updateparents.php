

<?php
session_start();
include '../assets/conn.php';
$u=$_SESSION['pid'];
$p=$_POST['pass'];
$p2=$_POST['pass2'];

$sql = "update patient set father='$p', mother='$p2' where id='$u';";  

$result = mysqli_query($conn, $sql);


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong'; $_SESSION['emsg'].=$errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
    echo '<meta http-equiv="refresh" content="0; url=../loginpatient.php">';
	}
    
    
    ?>
