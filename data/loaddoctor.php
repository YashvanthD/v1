<?php


if(isset($_SESSION['doctor']))
{
    $user= $_SESSION['doctor'];
   
}

$pass= $_SESSION['pid'];
include '../assets/conn.php';

$sql ="CREATE TABLE IF NOT EXISTS doctor(
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



$sql = "select * 
		from doctor
		where did='$pass';";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
	if ($errorr) {

        echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    

        }

else {
	$rows=mysqli_fetch_assoc($result);
        $_SESSION['doctid']=$rows['did'];
        $_SESSION['doctorname']=$rows['name'];
        $_SESSION['hospital']=$rows['hospital'];
        $_SESSION['specialization']=$rows['specialization'];
        $_SESSION['daddress']=$rows['address'];
        
        $_SESSION['dpassword']=$rows['password'];
    
	

	}
?>
<!-- <meta http-equiv="refresh" content="0; url=/"> -->







