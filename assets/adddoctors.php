<?php
   session_start();
include 'conn.php';
$name=$_POST['dname'];
$spe=$_POST['dspecialization'];
$hop=$_POST['dhospital'];
$num=$_POST['dnumber'];
$mail=$_POST['dmail'];
$dob=$_POST['ddob'];
$add=$_POST['dadress'];


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

$sql="INSERT INTO doctor(name,hospital,dob,specialization,mobile,mail,address) 
                VALUES ('$name','$hop','$dob','$spe','$num','$mail','$add');";

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

if ($errorr ){
     
        $_SESSION['emsg']='Already Exists';
        echo '<meta http-equiv="refresh" content="0; url=error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Added ';
    echo '<meta http-equiv="refresh" content="0; url=success.php">';
	}
    
    
    ?>

