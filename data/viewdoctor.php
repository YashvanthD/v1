<?php


session_start();

$pid=$_POST['did'];

$_SESSION['pid']=$pid;

include 'loaddoctor.php';

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
<button class="tablink" onclick="openCity('edit', this, 'red')" id="defaultOpen">Update</button><br>
<!-- <button class="tablink" onclick="openCity('reports', this, 'red')" id="defaultOpen">Reports</button><br> -->
<button class="tablink" onclick="javascript:window.history.back(-1);return false;">Back</button><br>
</div>
<h3 style="margin-left: 21%;">
 Doctor <?php echo ucwords($_SESSION['doctorname']); ?>
</h3>
<div id="profile" class="tabcontent">
<hr>
<style>
 
</style>
 <center>
  <table style="border:unset;padding:20px;margin:15px;border:unset;background-color:white;width:40%;">
    <tr ><td >Name <td>:</td> </td><td><?php echo ucwords($_SESSION['doctorname']); ?></td></tr>
    <tr ><td >Doctor Id <td>:</td> </td><td><?php echo $_SESSION['doctid']; ?></td></tr>
    <tr ><td >Specialization<td>:</td> </td><td><?php echo $_SESSION['specialization']; ?></td></tr>
    <tr ><td >Hospital <td>:</td> </td><td><?php echo $_SESSION['hospital']; ?></td></tr>
    <tr ><td >Address <td>:</td> </td><td><?php echo $_SESSION['daddress']; ?></td></tr>
    <tr><td >Password <td>:</td> </td><td><?php echo $_SESSION['dpassword']; ?></td></tr>
   </table>
  </center>
</div>

 
<div id="edit" class="tabcontent">
 <hr>
<center>
    <form action="../assets/updatedoctor.php" method="POST">
        <table>
                <input hidden type="text" name="did" value="<?php echo $_SESSION['doctid']; ?>"  required>
            <tr>
                <td>
    Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="dname" Value="<?php echo $_SESSION['doctorname']; ?>" >
                </td>
        </tr>
        <tr>
                <td>
   Specialization<span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="specs" required value="<?php echo $_SESSION['specialization']; ?>" >
                </td>
        </tr>

        <tr>
                <td>
  Hospital <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" required name="hospital" value="<?php echo $_SESSION['hospital']; ?>" >
                </td>
        </tr>

            <tr>
                <td>
Address <span style="color:red">*</span>
                </td>
                <td>
                <input type="text" required name="address" value="<?php echo $_SESSION['daddress']; ?>"  >
                </td>
            </tr>
     

        <tr>

      <td  style="text-align: center;"> <input  type="submit" value="Submit"></td><td>    <button style="width:100%" onclick="javascript:window.history.back(-1);return false;">Back</button></td> 
        </tr>
  
  
        </table>


    </form>

    </center>

</div>

<div id="reports" class="tabcontent">
<hr>
<?php  
$pid=$_SESSION['pid'];
include '../data/completedappp.php';
echo $table;
?>   
</div>
</center>

</body>