<?php

session_start();
if(isset($_SESSION['doctor']))
{
    $user= $_SESSION['doctor'];
    $pass= $_SESSION['password'];
}

if(isset($_POST['user'])){

$user=$_POST['user'];
$pass=$_POST['pass'];
}
// echo $user,$pass;

include 'assets/conn.php';


$sql = "select * 
		from doctor
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
        $_SESSION['did']=$rows['did'];
        $_SESSION['doctor']=$rows['name'];
        $_SESSION['ddob']=$rows['dob'];
        $_SESSION['dadd']=$rows['address'];
        $_SESSION['dspe']=$rows['specialization'];
        $_SESSION['dhosp']=$rows['hospital'];
        $_SESSION['dmob']=$rows['mobile'];
        $_SESSION['password']=$rows['password'];

        echo '<meta http-equiv="refresh" content="0; url=./doctor/doctor.php">';
	}
	else{
        echo $rows['name'],$rows['password'],$pass;
		echo '<h1 style="color:red">Invalid password</h1>';	
	}
	}
?>
<!-- <meta http-equiv="refresh" content="0; url=/"> -->







