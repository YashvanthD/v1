<?php


session_start();

$pid=$_POST['did'];

$_SESSION['pid']=$pid;

include 'loadpatient.php';

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
<button class="tablink" onclick="openCity('edit', this, 'red')" id="defaultOpen">Edit</button><br>
<button class="tablink" onclick="openCity('reports', this, 'red')" id="defaultOpen">Reports</button><br>
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
    <tr ><td >Password <td>:</td> </td><td><?php echo $_SESSION['ppassword']; ?></td></tr>
  </table>
  </center>
</div>

 
<div id="edit" class="tabcontent">
 <hr>
<center>
    <form action="updatepatient.php" method="POST">
        <table>
            <tr>
                <td>
    Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="pname" Value=<?php echo ucwords($_SESSION['patient']); ?> >
                </td>
        </tr>
        <tr>
                <td>
   Father Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="fname" value=<?php echo $_SESSION['pfather']; ?> required>
                </td>
        </tr>

        <tr>
                <td>
  Mother Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="mname" value=<?php echo $_SESSION['pmother']; ?> required>
                </td>
        </tr>

            <tr>
                <td>
Adhaar <span style="color:red">*</span>
                </td>
                <td>
                <input type="text" name="paadhar" value="<?php echo $_SESSION['paadhar']; ?>" pattern="[0-9]{12}" title="Give valid Aadhar No 8888-8888-8888" required>
                </td>
            </tr>
            <tr>
                <td>
DOB <span style="color:red">*</span>
                </td>
                <td>
<input type="date" name="pdob" value=<?php echo $_SESSION['pdob']; ?> required>
                </td>
            </tr><tr>
                <td>
Gender <span style="color:red">*</span>
                </td>
                <td>
                Male <input type="radio" name="pgender" id="" value="male" checked> Female<input type="radio" name="pgender" value="female" >
                </td>
            </tr>
           
            <tr>
                <td>
               gmail<span style="color:red">*</span>
                </td>
                <td>
             <input  type="gmail" name="pmail" value="<?php echo $_SESSION['pmail']; ?>">
                </td>
            </tr>
            <tr>
                <td>
             Phone <span style="color:red">*</span>
                </td>
                <td>
             <input type="number" name="pmbl" pattern="[0-9]{10}" value=<?php echo $_SESSION['pmbl']; ?>>
                </td>
            </tr>

           
    
            <tr>
                <td>
                Blood Group 
                </td>
                <td>
             <input  type="text" name="pblood" value=<?php echo $_SESSION['pblood']; ?>>
                </td>
            </tr>
            <tr>
                <td>
                Height
                </td>
                <td>
             <input  type="number" name="pht" value='<?php echo $_SESSION['phgt'];  ?>' step="0.01">
                </td>
            </tr>
            <tr>
                <td>
                Weight
                </td>
                <td>
             <input  type="number" name="pwt" value='<?php echo $_SESSION['pwt']; ?>'>
                </td>
            </tr>

            <tr>
                <td>
                Address 
                </td>
                <td>
             <textarea name="padd" id="" cols="30" rows="5" required ><?php echo $_SESSION['padd']; ?></textarea> 
                </td>
            </tr>
            <tr>
                
                <td>
             <input name="pid"  hidden value=<?php echo $_SESSION['pid']; ?> > 
                </td>
            </tr>

        <tr>

      <td  style="text-align: center;"> <input  type="submit" value="Submit"></td><td>    <button onclick="javascript:window.history.back(-1);return false;">Back</button></td> 
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