<?php



session_start();

if(!isset($_SESSION['doctor']))
{
echo '<meta http-equiv="refresh" content="0; url=/hospital/">';
}
else{

  $u =$_SESSION['doctor'];
  $dob =$_SESSION['ddob'];
  $add=$_SESSION['dadd'];
  $mob=$_SESSION['dmob'];
  $spe=$_SESSION['dspe'];
  $hosp=$_SESSION['dhosp'];

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
<link rel="stylesheet" href="../style.css">
<script src="../js.js"></script>
</head>
<title> <?php echo $u;; ?></title>
<body>

<div class="header" id="myHeader">
  <center><h2>Siddaganga Instutute of Technology</h2></center>
</div>
<div></div>
<div class="sidenav">
<button class="tablink" onclick="openCity('home', this, 'red')" id="defaultOpen">Home</button><br>
<button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
<button class="tablink" onclick="openCity('update', this, 'blue')">Update</button><br>
<button class="tablink" onclick="openCity('viewapp', this, 'orange')">View Appointment</button>
<button class="tablink" onclick="openCity('viewacptdapp', this, 'orange')">Accepted Appointment</button>
<button class="tablink" onclick="openCity('viewcompleted', this, 'orange')">Completed Appointment</button>
<button class="tablink" onclick="openCity('prescription', this, 'green')">Prescription</button>
<button class="tablink" onclick="window.location='logout.php';">Logout</button>
</div>


<div class="main">
  

<form style="float: right;">
<input type="text" size="30" placeholder="Search" onkeyup="show_result(this.value)">
</form>

  <h2>Hi <?php echo $u;; ?></h2>
  <div class="content">

  <div id="live_search"></div>

  <div id="home" class="tabcontent">
   Hi <?php echo $u;; ?>
</div>

<div id="profile" class="tabcontent">
  <h2 >My Profile</h2>
<hr>
<center>
  <table style="border:unset;padding:20px;margin:15px;border:unset;background-color:white;width:70%;">
    <tr ><td >Name <td>:</td> </td><td><?php echo $u; ?></td></tr>
    <tr ><td >Doctor Id <td>:</td> </td><td><?php echo $_SESSION['did']; ?></td></tr>
    <tr ><td >Date of Birth <td>:</td> </td><td><?php echo $dob; ?></td></tr>
    <tr><td >specialization <td>:</td> </td><td><?php echo $spe; ?></td></tr>
    <tr ><td >Hospital <td>:</td> </td><td><?php echo $hosp; ?></td></tr>
    <tr><td >Address <td>:</td> </td><td><?php echo $add; ?></td></tr>
    <tr><td >Mobile No <td>:</td> </td><td><?php echo $mob; ?></td></tr>
  </table>
  </center>
</div>





<div id="update" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('passreset', this, 'white')">Update Password</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('mblreset', this, 'white')">Update phone</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('spereset', this, 'white')">Update Specialization</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('hospreset', this, 'white')">Update Hospital</button><br>
  <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white"onclick="openCity('addreset', this, 'white')">Update Address</button><br>
</div>

<div id="passreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
  <form action="updatepassword" method=POST>
      <table style="padding:20px;margin:15px;border:unset;background-color:white">
      <tr>
        <td> Password : </td><td><input type="text" name="pass"><br></td>
      </tr>
      <tr>
        <td> Reenter Password : </td> <td> <input type="text" name="pass2"><br></td>
      </tr>
    <tr>  <td colspan="2"><input  style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Reset"></td></tr>
      </table>
   
</form>
</center>
</div>

<div id="mblreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatembl" method=POST>
    <tr>
  <td> New Mobile Number :</td><td><input type="number" required name=pass pattern="[0-9]{10}"></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>

<div id="spereset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatespe" method=POST>
    <tr>
  <td> Specilizationr :</td><td><input type="number" required name=pass pattern="[0-9]{10}"></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>


<div id="hospreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updatehosp" method=POST>
    <tr>
  <td> Hospital :</td><td><input type="text" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>



<div id="addreset" class="tabcontent">
  <h1>Update</h1>
  <hr>
  <center>
    <table style="padding:20px;margin:15px;border:unset;background-color:white">
    <form action="updateadd" method=POST>
    <tr>
  <td> Address :</td><td><input type="text" required name=pass></td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
  <td colspan="2"> <input  style="width:100%;height:40px;font-size:20px; background-color:white"  type="submit" value="Update"></td>
    </tr>
    </form>
    </table>

</center>
</div>




<div id="viewapp" class="tabcontent">
<h3>View Appointments</h3>
<hr>
<?php 
$pid=$_SESSION['did'];
include '../data/doctorrequestedapp.php'; 
echo $table;
?> 
</div>


<div id="viewacptdapp" class="tabcontent">
<h3>Scheduled Appointments</h3>
<hr>
<?php
$pid=$_SESSION['did'];
include '../data/doctoracceptedapp.php';
echo $table;
?> 

</div>

<div id="viewcompleted" class="tabcontent">
<h3>Completed Appointments</h3>
<hr>
<?php
$pid=$_SESSION['did'];
include '../data/completedapp.php';
echo $table;
?> 

</div>



<div id="prescription" class="tabcontent">
<h1>View prescription </h1>

</div>


</div>
</div>


<script>

</script>

</body>
</html>

   
</body>
</html> 



<?php 
}

?>


<script>
function show_result(str) {
  if (str.length==0) { 
    document.getElementById("live_search").innerHTML="";
    document.getElementById("live_search").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
// script for browser version above IE 7 and the other popular browsers (newer browsers)
    xmlhttpreq=new XMLHttpRequest();
  } else { 
// script for the IE 5 and 6 browsers (older versions)
    xmlhttpreq=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpreq.onreadystatechange=function() {
//check if server response is ready  
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live_search").innerHTML=this.responseText;
      document.getElementById("live_search").style.border="1px solid #A5ACB2";
    }
  }

  xmlhttpreq.open("GET","../ajax/ajax-searchdoct.php?q="+str,true);
  xmlhttpreq.send();
}
</script>