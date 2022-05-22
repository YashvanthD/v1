<?php



include '../assets/conn.php';


if(!isset($frompat)){

$rid=$_POST['did'];
}

$sql1 = "SELECT * ,  p.name 'pname',pr.pname 'pres'
		from reqapp r
        join patient p on p.id=r.pid
        join doctor d on d.did=r.did
        join patient_sym ps on ps.rid =r.reqid
        join patient_pre pp on pp.rid=r.reqid
        join patient_disease pd on pd.rid=r.reqid
        join prescription pr on pr.preid=pp.preid
        join disease  dis on dis.did=pd.did
        join symptoms ss on ss.sid=ps.sid
		where r.reqid='$rid';";  



$sql="SELECT * FROM reqapp where reqid='$rid';";
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$rows=mysqli_fetch_assoc($result);
$patid=$rows['pid'];
$doctid=$rows['did'];
$disease=$rows['disease'];


$sql="SELECT * FROM patient where id='$patid';";
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$rows=mysqli_fetch_assoc($result);
$pname=$rows['name'];
$paddress=$rows['address'];
$pblood=$rows['blood'];
$pdob=$rows['dob'];
$paadhar=$rows['aadhar'];
$pwt=$rows['weight'];
$pht=$rows['height'];


$sql="SELECT * FROM doctor where did='$doctid';";
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$rows=mysqli_fetch_assoc($result);

$dname=$rows['name'];
$dhospital=$rows['hospital'];
$dspec=$rows['specialization'];

$sql="SELECT * FROM patient_disease pd
 join patient_pre pp on pp.rid=pd.rid
join patient_sym ps on ps.rid=pd.rid
 join symptoms s on s.sid=ps.sid
 join disease d on d.did=pd.did
 join prescription p on p.preid=pp.preid
where pd.rid='$rid';";
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

// echo $Nrow;
$adisease="<table>";
$symptoms="<table>";
$prescription="<table>";

$adis=array();
$asym=array();
$apres=array();

while($rows=mysqli_fetch_assoc($result)){
    array_push($adis,$rows['dname']);
    array_push($asym,$rows['sname']);
    array_push($apres,$rows['pname']);
}
$adis= array_unique($adis);
$asym= array_unique($asym);
$apres= array_unique($apres);

foreach($adis as $name){
    $adisease.='<tr><td>'.$name.'</td></tr>';
}
foreach($asym as $name){
    $symptoms.='<tr><td>'.$name.'</td></tr>';
}
foreach($apres as $name){
    $prescription.='<tr><td>'.$name.'</td></tr>';
}




$adisease.="</table>";
$symptoms.="</table>";
$prescription.="</table>";


// SELECT * FROM patient_disease pd
// join patient_pre pp on pp.rid=pd.rid
// join patient_sym ps on ps.rid=pd.rid
//  join symptoms s on s.sid=ps.sid
// join disease d on d.did=pd.did;



$errorr=mysqli_error($conn);
	if ($errorr) {

        echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    

        }
        else {
            $rows=mysqli_fetch_assoc($result);



	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $rows['pname'];  ?></title>
</head>

<link rel="stylesheet" href="../style.css">
<script src="../js.js"></script>
<body>

<div class="header sticky-100" >
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>


<div class="sidenav sticky-25 left" >

<button class="tablink" onclick="javascript:window.history.back(-1);return false;">Back</button><br>
</div>
<h3 style="margin-left: 25%;">

Patient <?php
echo $pname;
if($Nrow==0 || $Nrow=='0'){
    echo '<h3 style="color:red;margin:left:25%">Appointment not completed..!!!</h3>';
}
	
 ?>
</h3>

<center>
<button style="float: right;width:70px;padding:13px;margin-right:30px;"><a target="_blank" href="/hospital/E-Hospital-Management/data/reportPatient.php?rid=<?php echo $rid; ?>">print</a></button>
<table>
    <tr><td>Request ID</td><td><?php echo $rid;?></td></tr>

    <tr><td>Patient Name</td><td><?php echo $pname;?></td></tr>
    <tr><td>PatientID</td><td><?php echo $patid;?></td></tr>
    <tr><td>Address</td><td><?php echo $paddress;?></td></tr>
    <tr><td>Blood Group</td><td><?php echo $pblood;?></td></tr>
    <tr><td>Date of Birth</td><td><?php echo $pdob;?></td></tr>
    <tr><td>Aadhar</td><td><?php echo $paadhar;?></td></tr>


    <tr><td>Height</td><td><?php echo $pht;?></td></tr>
    <tr><td>Weight</td><td><?php echo $pwt;?></td></tr> 

    <tr><td> <div  class="popwin">Disease (P)</div> <div class='hide'>Patient addressed Disease</div> </td><td><?php echo $disease;?></td></tr>
    <tr><td>Hospital</td><td><?php echo $dhospital;?></td></tr>
    <tr><td><div  class="popwin">Actual Disease (D)</div> <div class='hide'>Doctor addressed Disease</div> </td><td><?php echo $adisease;?></td></tr>
    <tr><td>Doctor  Name</td><td><?php echo $dname;?></td></tr>
   
    <tr><td>Prescription Given</td><td><?php echo $prescription;?></td></tr>

       <tr><td>Symptoms</td><td><?php echo $symptoms;?></td></tr>

</table> 

</center>
</body>
</html>



<?php }



    ?>

<style>
    .hide{
        display: none;
    }
    .popwin:hover + .hide{
        display: block;
    }
    .popwin:hover{
        display: none;
    }
</style>

