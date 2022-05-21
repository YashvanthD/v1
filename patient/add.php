<?php
   session_start();
include '../assets/conn.php';
$name=strtolower($_POST['pname']);
$aadhar=$_POST['paadhar'];
$gen=$_POST['pgender'];
$num=$_POST['pmbl'];
$mail=$_POST['pmail'];
$dob=$_POST['pdob'];
$add=$_POST['padd'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];

$ht=$_POST['pht'];
$wt=$_POST['pwt'];
$blood=$_POST['pblood'];

$pass=$name[0].$name[1].$dob[0].$dob[1].$dob[2].$dob[3];


$sql = "CREATE TABLE IF NOT EXISTS patient(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(512),
    address varchar(512),
    mobile varchar(13),
    mail varchar(126),
    dob date,
    gender varchar(10),
    password varchar(64),
    aadhar varchar(15) NOT NULL UNIQUE,
    father varchar(128),
    mother varchar(128),
    blood varchar(10),
    weight float,
    height float,

    primary key(id,aadhar));";


$result = mysqli_query($conn, $sql);

$sql="INSERT INTO patient(name,aadhar,dob,gender,mobile,mail,address,password,father,mother,weight,height,blood) 
                VALUES ('$name','$aadhar','$dob','$gen','$num','$mail','$add','$pass','$fname','$mname','$wt','$ht','$blood');";

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

if ($errorr ){
        echo $errorr;
        $_SESSION['emsg']='Already Exists <br>'.$errorr;
        echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Added Exists';
    echo '<meta http-equiv="refresh" content="0; url=../assets/success.php">';
	}
    
    
    ?>

