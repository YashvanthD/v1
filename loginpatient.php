<?php

session_start();
if(isset($_SESSION['patient']))
{
    $user= $_SESSION['patient'];
    $pass= $_SESSION['password'];
}

if(isset($_POST['user'])){

$user=$_POST['user'];
$pass=$_POST['pass'];
}
// echo $user,$pass;

include 'assets/conn.php';

$sql = "CREATE TABLE IF NOT EXISTS patient(
        id int NOT NULL AUTO_INCREMENT,
        name varchar(512),
        address varchar(512),
        mobile varchar(10),
        mail varchar(126),
        dob date,
        gender varchar(10),
        password varchar(64),
        aadhar int NOT NULL UNIQUE,
        father varchar(128),
        mother varchar(128),
        blood varchar(10),
        weight float,
        height float,
        
        primary key(id,aadhar));";


$result = mysqli_query($conn, $sql);



$sql = "select * 
		from patient
		where name='$user' and password='$pass';";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){

	if ($errorr) {

        echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    

	}
    echo '<meta http-equiv="refresh" content="0; url=/hospital">';

		}
else {
	$rows=mysqli_fetch_assoc($result);
	$passF=$rows['password'];
	if($pass==$passF){
        $_SESSION['pid']=$rows['id'];
        $_SESSION['patient']=$rows['name'];
        $_SESSION['pdob']=$rows['dob'];
        $_SESSION['padd']=$rows['address'];
        $_SESSION['pblood']=$rows['blood'];
        $_SESSION['phgt']=$rows['height'];
        $_SESSION['pwt']=$rows['weight'];
        $_SESSION['pmbl']=$rows['mobile'];
        $_SESSION['pfather']=$rows['father'];
        $_SESSION['pmother']=$rows['mother'];
        $_SESSION['pmail']=$rows['mail'];
        $_SESSION['password']=$rows['password'];
        $_SESSION['pgender']=$rows['gender'];
        $_SESSION['paadhar']=$rows['aadhar'];

        echo '<meta http-equiv="refresh" content="0; url=./patient/patient.php">';
	}
	else{
        echo $rows['name'],$rows['password'],$pass;
		echo '<h1 style="color:red">Invalid password</h1>';	
	}
	}
?>
<!-- <meta http-equiv="refresh" content="0; url=/"> -->







