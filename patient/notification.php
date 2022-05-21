

<?php
require_once "../assets/conn.php";

$result = mysqli_query($conn,"SELECT *,rtime-current_time()  'rem' FROM reqapp where (rdate=current_date() and (rtime < now() + interval 30 MINUTE) and (now() < rtime + interval 30 MINUTE)) or (pid='$pid' and status='1' and (now() < rtime + interval 30 MINUTE)) ");
$e=mysqli_error($conn);
echo $e;
if($result)
$n=mysqli_num_rows($result) ;

?>
<h3>Notifications 
    <?php if($n){
echo '<button style="border-radius:50%;width:auto;padding-left:5px;padding-right:5px;padding-top:1px;padding-bottom:1px;background-color:aqua">'.$n.'</button>';
    } ?>
</h3>
<hr>
<Center>
    <table>
<?php
$i=1;
if($result)
while($row = mysqli_fetch_array($result)) {
$m=$row["rem"];
$h=$row['hospital'];
$d=$row['doctor'];
$time=$row['rtime'];
$date=$row['rdate'];
$m=1*$m;
$m=(int) $m;
if($m<10000 && $m> -10000){
if($m<=0){
    $m=-1*$m;
    $m=$m/60;
    $m=(int)$m;

    echo "<tr ><td>$i</td> <td>Hey You Have appointment in $h with $d and you have Time Exeeded $m Minutes ago.</td></tr><br>";
    }
else {
        $m=$m/60;
        $m=(int) $m;
        echo "<tr><td>$i</td> <td> Hey You Have appointment in $h with $d and you have Time remaining only $m Minutes.</td></tr><br>";
}}

    if($row['status']=='1' || $row['status']==1){
        echo "<tr><td>$i</td> <td>Hey $u You got Appointment on $date time : $time with Doctor $d in $h hospital.</td></tr><br>";

}
$i++;
}
?></table>

</Center>