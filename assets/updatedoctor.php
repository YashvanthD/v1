<?php
   session_start();
include 'conn.php';
$name=$_POST['dname'];
$spe=$_POST['specs'];
$hop=$_POST['hospital'];
$did=$_POST['did'];
$add=$_POST['address'];


$sql = "CREATE TABLE IF NOT EXISTS doctor(
    did int NOT NULL AUTO_INCREMENT,
    name varchar(128) NOT NULL,
    password varchar(128) default 'Doct123',
    specialization varchar(128),
    mobile varchar(12) UNIQUE,
    mail varchar(128) UNIQUE,
    address varchar(512),
    hospital varchar(256),
    dob date,
    primary key(did))     ;  ";  

$result = mysqli_query($conn, $sql);

$sql="UPDATE doctor set name='$name', hospital='$hop',specialization='$spe',address='$add' where did='$did';";

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

if ($errorr ){
     
        $_SESSION['emsg']='Already Exists';
        echo '<meta http-equiv="refresh" content="0; url=error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Updated';
    echo '<meta http-equiv="refresh" content="0; url=success.php">';
	}
    
    
    ?>

