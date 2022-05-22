

<?php
require_once "../assets/conn.php";

$result = mysqli_query($conn,"SELECT * FROM reqapp where pid='$pid' and status=2 order by rdate desc,rtime desc limit 1;");
$e=mysqli_error($conn);

$Nrow=mysqli_num_rows($result);

// echo $Nrow;
if($Nrow==0){
    echo  "<br><br><h3>There is no latest reports</h3>";
}
else{
    $row=mysqli_fetch_assoc($result);
    $frompat=$row['reqid'];
    $rid=$frompat;
   
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
    <center>
    <button style="float: right;width:70px;padding:13px;margin-right:30px;"><a target="_blank" href="/hospital/E-Hospital-Management/data/reportPatient.php?rid=<?php echo $rid; ?>">print</a></button>
    
    <table>
        <tr><td>Request ID</td><td><?php echo $rid;?></td></tr>
        <!-- <tr><td>Disease</td><td><?php echo $disease;?></td></tr> -->
        <tr><td>Hospital</td><td><?php echo $dhospital;?></td></tr>
        <tr><td>Doctor  Name</td><td><?php echo $dname;?></td></tr>

        <tr><td> Disease</td><td><?php echo $adisease;?></td></tr>   
<tr><td>Prescription Given</td><td><?php echo $prescription;?></td></tr>
   <tr><td>Symptoms</td><td><?php echo $symptoms;?></td></tr>

        <tr><td>Blood Group</td><td><?php echo $pblood;?></td></tr>
        <tr><td>Height</td><td><?php echo $pht;?></td></tr>
        <tr><td>Weight</td><td><?php echo $pwt;?></td></tr> 
    
         
    </table> 
    




    <?php

$sql="SELECT * FROM diabetes_sym where aadhar='$paadhar' order by dateTime desc;";
$result = mysqli_query($conn, $sql);

    
$errorr=mysqli_error($conn);
if ($errorr) {

    echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    

    }
    else {
        
        if(mysqli_num_rows($result)){

?>
<hr><br>
<center><h2>Latest Predicted Diabetes Reports </h2></center>
<button style="float: right;width:70px;padding:13px;margin-right:30px;"><a target="_blank" href="/hospital/E-Hospital-Management/data/diabetesReport.php?aadhar=<?php echo $paadhar; ?>">print</a></button>
    <table>
        <tr>
        <td>Sl No</td>
        <td>Aadhar</td>
        <td>Date and Time</td>
        <td>Number of Pregnencies</td>
        <td>Glucose</td>
        <td>Blood Pressure</td>
        <td>Skin Thickness</td>
        <td>Insulin Level</td>
        <td>BMI</td>
        <td>Pedigree Function</td>
        <td>age</td>
        <td>Result</td>
    </tr>
    <tr>
       
              <?php
              $i=1;
             
              $Nrow=mysqli_num_rows($result);
             
              while($i<=$Nrow){
                echo ' <td>'.$i.'</td>';
                $rows=mysqli_fetch_assoc($result);
                    foreach ($rows as $value) {
                        echo "<td>".$value."</td>";
                    }
                    
                    echo '</tr>';
                    $i+=1;
                }
                ?>            
        </tr>
    </table>
    </center>

    <?php 
            }
        }
    }
}
    
        ?>