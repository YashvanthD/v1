<?php


session_start();
include '../assets/conn.php';
if(isset($_POST['did'])){
$pid=$_POST['did'];

}

$sql = "select * 
		from patient
		where id='$pid';";  

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
</head>
<link rel="stylesheet" href="../style.css">
<script src="../js.js"></script>
<body>

<div class="header sticky-100" >
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>


<div class="sidenav sticky-25 left" >
<button class="tablink" onclick="openCity('profile', this, 'green')" >Profile</button><br>
<button class="tablink" onclick="openCity('reports', this, 'black')" >Previous Reports</button><br>
<button class="tablink" onclick="javascript:window.history.back(-1);return false;">Back</button><br>
</div>
<h3 style="margin-left: 21%;">
 Patient <?php echo ucwords($_SESSION['patient']); ?>
</h3>


<div id="profile" class="tabcontent">
<hr>
<style>
 
</style>
 <center>
  <table style="border:unset;padding:20px;margin:15px;border:unset;background-color:white;width:40%;">
    <tr ><td >Name <td>:</td> </td><td><?php echo ucwords($_SESSION['patient']); ?></td></tr>
    <tr ><td >Patient Id <td>:</td> </td><td><?php echo $_SESSION['pid']; ?></td></tr>
    <tr ><td >Aadhar No <td>:</td> </td><td><?php echo $_SESSION['paadhar']; ?></td></tr>
    <tr ><td >Date of Birth <td>:</td> </td><td><?php echo $_SESSION['pdob']; ?></td></tr>
    <tr ><td >Gender <td>:</td> </td><td><?php echo $_SESSION['pgender']; ?></td></tr>
    <tr><td >Father Name <td>:</td> </td><td><?php echo $_SESSION['pfather']; ?></td></tr>
    <tr><td >Mother Name <td>:</td> </td><td><?php echo $_SESSION['pmother']; ?></td></tr>
    <tr><td >Address <td>:</td> </td><td><?php echo $_SESSION['padd']; ?></td></tr>
    <tr><td >Mobile No <td>:</td> </td><td><?php echo $_SESSION['pmbl']; ?></td></tr>
    <tr><td >Mail ID <td>:</td> </td><td><?php echo $_SESSION['pmail']; ?></td></tr>
    <tr ><td >Height <td>:</td> </td><td><?php echo $_SESSION['phgt'] ; ?></td></tr>
    <tr ><td >Weight <td>:</td> </td><td><?php echo $_SESSION['pwt']; ?></td></tr>
    <tr ><td >Blood Group <td>:</td> </td><td><?php echo $_SESSION['pblood']; ?></td></tr>
   
  </table>
  </center>
</div>

 

<div id="reports" class="tabcontent">
<hr>
<?php  
$pid=$_SESSION['pid'];
include '../data/completedappp.php';
echo $table;
?>   
  </center>
</div>

</center>

</body>