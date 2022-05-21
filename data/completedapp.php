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
        where did='$pid' and status=2
        order by rdate; ";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$table='';


$errorr=mysqli_error($conn);
if ($errorr || $Nrow==0){
	if ($errorr) {
        echo '<h1 style="color:red">'.$errorr.'</h1><br>';
	            }
        echo "No Appointments Completed yet";
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
            Date
        </td>
		<td>
		    Time
	    </td>
        <td>
           Report
        </td>
    </thead>
	<tr><td colspan='6'><hr></td></tr>
	";
    $i=0;
while($i<$Nrow){

	$rows=mysqli_fetch_assoc($result);
	$pid=$rows['pid'];
	$rid=$rows['reqid'];
    $name=ucwords($rows['pname']);
    $hos=$rows['hospital'];
    $spe=$rows['specialization'];
    $d=$rows['rdate'];
    $t=$rows['rtime'];
    $dis=$rows['disease'];
    $table.="
    <tr>
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
       $d
    </td>
	<td>
        $t
</td>

    <td>
        <form action='../data/prereport.php' method=POST><input type='text' name='did' hidden value='$rid'> <input type='submit' style='width:100%;background-color:sky-blue' value='View report'></form>
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





