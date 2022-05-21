<?php


if(isset($_SESSION['patient']))
{
    $user= $_SESSION['patient'];
   
}
$pass= $_SESSION['pid'];
include '../assets/conn.php';



$sql = "select * 
		from reqapp
		where reqid='$pass';";  

$result = mysqli_query($conn, $sql);

$rows=mysqli_fetch_assoc($result);
        $_SESSION['reqid']=$pass;
        $pass=$rows['pid'];
        $rid=$rows['reqid'];
        $dname=$rows['doctor'];
        $hos=$rows['hospital'];
        $spe=$rows['specialization'];
        $date=$rows['rdate'];
        $time=$rows['rtime'];
        $disp=$rows['disease'];


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
        weight int,
        height int,
        
        primary key(id,aadhar));";


$result = mysqli_query($conn, $sql);



$sql = "select * 
		from patient
		where id='$pass';";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
	if ($errorr) {

        echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    

        }

else {
	$rows=mysqli_fetch_assoc($result);
        $_SESSION['pid']=$rows['id'];
        $_SESSION['patient']=$rows['name'];
        $_SESSION['paadhar']=$rows['aadhar'];
        $_SESSION['pdob']=$rows['dob'];
        $_SESSION['padd']=$rows['address'];
        $_SESSION['pblood']=$rows['blood'];
        $_SESSION['phgt']=$rows['height'];
        $_SESSION['pwt']=$rows['weight'];
        $_SESSION['pmbl']=$rows['mobile'];
        $_SESSION['pfather']=$rows['father'];
        $_SESSION['pmother']=$rows['mother'];
        $_SESSION['pmail']=$rows['mail'];
        $_SESSION['ppassword']=$rows['password'];
        $_SESSION['pgender']=$rows['gender'];

    
	

	}
?>
<!-- <meta http-equiv="refresh" content="0; url=/"> -->







