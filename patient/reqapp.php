<?php
   session_start();
include '../assets/conn.php';
$spe=strtolower($_POST['spe']);
$hosp=$_POST['hosp'];
$doct=$_POST['doct'];
$date=$_POST['date'];
$time=$_POST['time'];
$pid=$_SESSION['pid'];
$pname=$_SESSION['patient'];
$dis=$_POST['disease'];

$sql = "CREATE TABLE IF NOT EXISTS reqapp(
    reqid int NOT NULL AUTO_INCREMENT,
    pid varchar(512),
    did varchar(512),
    hospital varchar(512),
    doctor varchar(512),
    specialization varchar(126),
    rdate date,
    rtime time,
    disease varchar(512),
    pname varchar(512),
    status int default 0,
    primary key(reqid));";

$result = mysqli_query($conn, $sql);

$sql = "SELECT did from doctor where specialization='$spe' and name='$doct';";
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
// echo $errorr;
$row=mysqli_fetch_assoc($result);
$did=$row['did'];

// echo $pid.'.'.$did.'.'.$hosp.'.'.$spe.'.'.$date.'.'.$time.'.'.$pname.'.'.$doct;

$sql="INSERT INTO reqapp(pid,did,hospital,specialization,rdate,rtime,pname,doctor,disease) 
                VALUES ('$pid','$did','$hosp','$spe','$date','$time','$pname','$doct','$dis');";

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

if ($errorr ){
        echo $errorr;
        $_SESSION['emsg']='Sorry Smoething Went Wrong <br>'.$errorr;
        echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">';
        
		}
else {
    $_SESSION['emsg']='Successfully Appointment requested <h3>Please Regurarly check for Updates in the Appointment Windows</h3>';
    echo '<meta http-equiv="refresh" content="0; url=../assets/success.php">';
	}
    
    
    ?>

