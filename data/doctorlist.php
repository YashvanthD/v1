<?php

include '../assets/conn.php';



$sql = "CREATE TABLE IF NOT EXISTS doctor(
    did int NOT NULL AUTO_INCREMENT,
    name varchar(128) NOT NULL,
    password varchar(128) default 'Doct123',
    specialization varchar(128),
    mobile varchar(12) UNIQUE,
    mail varchar(128) UNIQUE,
    address varchar(512),
    hospital varchar(256),
    dob date,
    primary key(did))     ;  ";  

$result = mysqli_query($conn, $sql);

$sql = "select * 
		from doctor
        order by did; ";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	}
        echo "Empty Doctors";
        $table='';
	}
else {

    $table="<center><table style='width:90%; 
   '>
    <tr  class='boar'>
        <td>
            ID
        </td>
        <td>
            Name
        </td>
        <td>
            Specialist
        </td>
        <td>
            Hospital
        </td>
        <td>
            Mobile
        </td>
        <td>
    View
    </td>
        <td>
            Delete
        </td>
    </tr>
    <tr><td colspan='7'><hr></td></tr>
    ";
    $i=0;
while($i<$Nrow){

	$rows=mysqli_fetch_assoc($result);

	$did=$rows['did'];
    $name=ucwords($rows['name']);
    $hos=$rows['hospital'];
    $spe=$rows['specialization'];
    $ph=$rows['mobile'];
    $table.="
    <tr>
    <td>
        $did
    </td>
    <td>
        $name
    </td>
    <td>
        $spe
    </td>
    <td>
  $hos
    </td>
    <td>
       $ph
    </td>
    <td>
    <form action='../data/viewdoctor.php' method=POST><input type='text' name='did' hidden value='$did'> <input type='submit' style='width:100%;background-color:Green' value='View'></form>
</td>
    <td>
        <form action='deleted' method=POST><input type='text' name='did' hidden value='$did'> <input type='submit' style='width:100%;background-color:red' value='Delete'></form>
    </td>
    </tr>";
    $i=$i+1;



        }
        $table.="</table></center>";

	}
?>


<style>
    tr{width: 100%;
    margin: 22px;}
    .boar{
        border: solid black 2px;
    }
</style>





