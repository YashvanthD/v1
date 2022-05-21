<?php


include '../assets/conn.php';

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


$sql = "select * 
		from reqapp
        order by rdate desc; ";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$table='';

$s0=0;
$s1=0;
$s2=0;

$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	            }
        echo "No Appointments yet";
 
	    }
else {

    $table="<center><table style='width:90%; 
   '>
    <thead style='border-bottom:solid black 1px;' class='boar'>
        <td style='width: 30px;'>
           Req Id
        </td>
        <td>
            Patient
        </td>
        <td>
        Disease
        </td>
        <td>
        Doctor
    </td>
    <td>
    Specialist
</td>
<td>
Hospital
</td>
        <td>
            Date
        </td>
		<td>
		    Time
	    </td>
        <td>
       View
        </td>
        <td>
        Delete
    </td>
    </thead>
	<tr><td colspan='10'><hr></td></tr>
	";
    $i=0;
while($i<$Nrow){

	$rows=mysqli_fetch_assoc($result);

	$rid=$rows['reqid'];
    $name=ucwords($rows['pname']);
    $doct=ucwords($rows['doctor']);
    $hos=$rows['hospital'];
    $spe=$rows['specialization'];
    $d=$rows['rdate'];
    $t=$rows['rtime'];
    $dis=$rows['disease'];
    $s=$rows['status'];
 if($s==0){
    $color='#F8E0E0';
    $s0+=1;
 }
 if($s==1){
     $color='#CECEF6';
    $s1+=1;
    }
 if($s==2){
     $color='#BFE8AE';
    $s2+=1;
    }
    $table.="
    <tr style='background-color:$color'>
    <td>
        $rid
    </td>
    <td>
        $name
    </td>
    <td>
        $dis
    </td>
    <td>
    $doct
</td>
<td>

$spe
</td>    
<td>
        $hos
    </td>
    <td>
       $d
    </td>
	<td>
        $t
</td>
<td>
<form action='../data/prereport' method=POST><input type='text' name='did' hidden value='$rid'> <input type='submit' style='width:100%;background-color:#2EFE64' value='View'></form>
</td>
    <td>
        <form action='deleterapp' method=POST><input type='text' name='did' hidden value='$rid'> <input type='submit' style='width:100%;background-color:#F7819F' value='Cancel'></form>
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





