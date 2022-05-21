<?php
   session_start();
include 'conn.php';
$name=strtolower($_POST['dname']);
$aadhar=$_POST['daadhar'];
$gen=$_POST['dgender'];
$num=$_POST['dnumber'];
$mail=$_POST['dmail'];
$dob=$_POST['ddob'];
$add=$_POST['dadress'];


if(isset($_POST['pass']))
{
    $pass=$_POST['pass'];

}
else{
    $pass=$name[0].$name[1].$dob[0].$dob[1].$dob[2].$dob[3];
}

$sql = "CREATE TABLE IF NOT EXISTS patient(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(512),
    address varchar(512),
    mobile varchar(13),
    mail varchar(126),
    dob date,
    gender varchar(10),
    password varchar(64),
    aadhar varchar(12) NOT NULL UNIQUE,
    father varchar(128),
    mother varchar(128),
    blood varchar(10),
    weight int,
    height int,

    primary key(id,aadhar));";


$result = mysqli_query($conn, $sql);

$sql="INSERT INTO patient(name,aadhar,dob,gender,mobile,mail,address,password) 
                VALUES ('$name','$aadhar','$dob','$gen','$num','$mail','$add','$pass');";

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

if ($errorr ){
        echo $errorr;
        $_SESSION['emsg']='Already Exists <br>'.$errorr;
        echo '<meta http-equiv="refresh" content="5; url=error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Added Exists';
    echo '<meta http-equiv="refresh" content="5; url=success.php">';
	}
    
    
    ?>

