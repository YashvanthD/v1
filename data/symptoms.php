<table style="width:100%" >
<?php
require_once "../assets/conn.php";
$result = mysqli_query($conn,"CREATE TABLE IF NOT EXISTS symptoms(sid int AUTO_INCREMENT PRIMARY KEY,sname varchar(128) UNIQUE);");
$result = mysqli_query($conn,"INSERT INTO symptoms(sname) VALUES('cough'),('fever'),('headache');");
$result = mysqli_query($conn,"SELECT sname FROM symptoms order by sid limit 28");
?>
<tr style='width:100%'>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    if($i%6==0){
        echo "</tr><tr style='width:100%'>";
    }
?>
<td style="width:15%"><?php echo $row["sname"];?><input type="checkbox" value="<?php echo $row["sname"];?>" name="<?php echo $row["sname"];?>" ></td>
<?php
$i+=1;
}    if(!($i-1)%6==0){
    echo "</tr>";
}

?>
</table>