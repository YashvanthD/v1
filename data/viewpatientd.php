<?php


session_start();

if (isset($_POST['did'])) {
    $pid = $_POST['did'];

    $_SESSION['pid'] = $pid;
} else if (isset($_SESSION['pid'])) {
    $pid = $_SESSION['pid'];
}




include 'loadpatientreq.php';

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

    <div class="header sticky-100">
        <center>
            <h2>Siddaganga Instutute of Technology</h2>
        </center>
    </div>


    <div class="sidenav sticky-25 left">
        <button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
        <button class="tablink" onclick="openCity('edit', this, 'red')" id="defaultOpen">Update</button><br>
        <button class="tablink" onclick="openCity('reports', this, 'black')">Previous Reports</button><br>
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
                <tr>
                    <td>Name
                    <td>:</td>
                    </td>
                    <td><?php echo ucwords($_SESSION['patient']); ?></td>
                </tr>
                <tr>
                    <td>Patient Id
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pid']; ?></td>
                </tr>
                <tr>
                    <td>Aadhar No
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['paadhar']; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pdob']; ?></td>
                </tr>
                <tr>
                    <td>Gender
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pgender']; ?></td>
                </tr>
                <tr>
                    <td>Father Name
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pfather']; ?></td>
                </tr>
                <tr>
                    <td>Mother Name
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pmother']; ?></td>
                </tr>
                <tr>
                    <td>Address
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['padd']; ?></td>
                </tr>
                <tr>
                    <td>Mobile No
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pmbl']; ?></td>
                </tr>
                <tr>
                    <td>Mail ID
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pmail']; ?></td>
                </tr>
                <tr>
                    <td>Height
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['phgt']; ?></td>
                </tr>
                <tr>
                    <td>Weight
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pwt']; ?></td>
                </tr>
                <tr>
                    <td>Blood Group
                    <td>:</td>
                    </td>
                    <td><?php echo $_SESSION['pblood']; ?></td>
                </tr>

            </table>
        </center>
    </div>


    <div id="edit" class="tabcontent">
        <hr>
        <center>
            <form action="../doctor/completed.php" method="POST">
                <table>
                    <tr>
                        <td>
                            Request Id <span style="color:red">*</span>
                        </td>
                        <td>
                            <?php echo $_SESSION['reqid']; ?>
                            <input type="text" value=" <?php echo $_SESSION['reqid']; ?>" hidden name="reqid">
                            <input type="text" value=" <?php echo $_SESSION['pid']; ?>" hidden name="pid">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Desies Mentioned <span style="color:red">*</span>
                        </td>
                        <td>
                            <?php echo $disp; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            <input type="text" name="pblood" value=<?php echo $_SESSION['pblood']; ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Height
                        </td>
                        <td>
                            <input type="number" name="pht" value='<?php echo $_SESSION['phgt'];  ?>' step="0.01">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Weight
                        </td>
                        <td>
                            <input type="number" name="pwt" value='<?php echo $_SESSION['pwt']; ?>'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="10" color="black">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center;font-size:large"><b>Symptoms</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php include 'symptoms.php'; ?> </td>
                    </tr>
                    <tr>
                        <td> Other Symptoms </td>
                        <td> <?php include 'addsymptoms.php'; ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="10" color="black">
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2" style="text-align:center;font-size:large"> <b>Disease</b> <span style="color:red">*</span> </td>
                    </tr>
                    <tr>

                        <td colspan="2"> <?php include 'adddisease.php'; ?> </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <hr size="10" color="black">
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2" style="text-align:center;font-size:large"> <b>Prescription</b> <span style="color:red">*</span> </td>
                    </tr>
                    <tr>

                        <td colspan="2"> <?php include 'addpresc.php'; ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr size="10" color="black">
                        </td>
                    </tr>
                    <td style="text-align: center; "> <input style="width:200px;padding:10px;height:50px" type="submit" value="Submit"></td>
                    <td> <button style="width:200px;padding:10px;height:50px" onclick="javascript:window.history.back(-1);return false;">Back</button></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>

    <div id="reports" class="tabcontent">
        <hr>
        <div style="margin-left: 10%;height:30%; overflow:auto;">
            <?php
            $pid = $_SESSION['pid'];
            include '../data/completedappp.php';
            echo $table;
            ?>
        </div>
        <div style="margin-left: 20%;height:30%; overflow:auto;">
            <?php
            $paadhar = $_SESSION['paadhar'];
            include '../data/diabeteslist.php';
            
            ?>
        </div>
        </center>
    </div>

    </center>

</body>