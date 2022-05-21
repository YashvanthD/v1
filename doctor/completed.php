<?php
session_start();
include '../assets/conn.php';


$rid=$_POST['reqid'];
$ht=$_POST['pht'];
$wt=$_POST['pwt'];
$blood=$_POST['pblood'];
$pid=$_POST['pid'];
$sym=$_POST['nsym'];
$pre=$_POST['npre'];
$dis=$_POST['ndis'];

$result = mysqli_query($conn,"UPDATE INTO reqapp set status=2 where reqid='$rid';");
$result = mysqli_query($conn,"UPDATE INTO patient set weight='$wt',height='$ht',blood='$blood' where pid='$pid';");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS patient_sym(rid int NOT NULL,pid int NOT NULL,sid int NOT NULL);");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS disease(did int AUTO_INCREMENT PRIMARY KEY,dname varchar(128) NOT NULL,descpr varchar(512));");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS prescription(preid int AUTO_INCREMENT PRIMARY KEY,pname varchar(512) NOT NULL,descpr varchar(512));");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS patient_pre(rid int NOT NULL,pid int NOT NULL,did int NOT NULL,preid int NOT NULL);");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS patient_disease(rid int NOT NULL,pid int NOT NULL,did int NOT NULL);");
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS symptoms(sid int AUTO_INCREMENT PRIMARY KEY,sname varchar(128) UNIQUE NOT NULL);");
$result = mysqli_query($conn,"INSERT INTO symptoms(sname) VALUES('cough'),('fever'),('headache');");



// -------------------------

  


// -------------------------


foreach ($_POST['nsym'] as $key => $value) {
    $value=strtolower($value);
    $result = mysqli_query($conn,"INSERT INTO symptoms(sname) VALUES ('$value');");
    $result = mysqli_query($conn,"SELECT * from symptoms where sname='$value';");
    if(isset($result) && !($result)==false ){
    $row = mysqli_fetch_assoc($result);
    $sid=$row['sid'];
    $result = mysqli_query($conn,"INSERT INTO patient_sym VALUES('$rid','$pid','$sid');");
}
}


$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong inserting symptoms'.$errorr;
    echo $errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}


        // -------------------------

foreach ($_POST['npre'] as $key => $value) {
    $value=strtolower($value);
    if($value!=""){
    $result = mysqli_query($conn,"INSERT INTO prescription(pname) VALUES ('$value');");
    $result = mysqli_query($conn,"SELECT * from prescription where pname='$value';");
    
    if(isset($result) && !($result)==false){
        $row = mysqli_fetch_assoc($result);
        $sid=$row['preid'];
        $result = mysqli_query($conn,"SELECT * from reqapp where reqid='$rid';");
    
        if(isset($result) && !($result)==false){
            $row = mysqli_fetch_assoc($result);
            $did=$row['did'];
            $result = mysqli_query($conn,"INSERT INTO patient_pre VALUES('$rid','$pid','$did','$sid');");
        }
 
        }
    }
}




$errorr=mysqli_error($conn);
if ($errorr ){
    $_SESSION['emsg']='Sorry Something Went Wrong inserting preiscription '.$sid.$errorr;
    echo $errorr;
    echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
        
		}


        foreach ($_POST['ndis'] as $key => $value) {
            $value=strtolower($value);
            $result = mysqli_query($conn,"INSERT INTO disease(dname) VALUES ('$value');");
            $result = mysqli_query($conn,"SELECT * from disease where dname='$value';");
            if(isset($result) && !($result)==false){
                $row = mysqli_fetch_assoc($result);
            $sid=$row['did'];
            $result = mysqli_query($conn,"INSERT INTO patient_disease VALUES('$rid','$pid','$sid');");}
        }
        
        $did=$sid;
        
        $errorr=mysqli_error($conn);
        if ($errorr ){
            $_SESSION['emsg']='Sorry Something Went Wrong inserting disease'.$errorr;
            echo $errorr;
            echo '<meta http-equiv="refresh" content="0; url=../assets/error.php">'; 
                
                }      
else {
    $_SESSION['emsg']='Successfully Deleted';
    $result = mysqli_query($conn,"UPDATE reqapp set status='2' where reqid='$rid';");
        echo '<meta http-equiv="refresh" content="0; url=doctor.php">';
	}
    
    
    ?>
