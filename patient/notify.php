

<?php
require_once "../assets/conn.php";

$result = mysqli_query($conn,"SELECT *,rtime-current_time()  'rem' FROM reqapp where (rdate=current_date() and (rtime < now() + interval 30 MINUTE) and (now() < rtime + interval 30 MINUTE)) or (pid='$pid' and status= 1 and (now() < rtime + interval 30 MINUTE))");
$e=mysqli_error($conn);
if($result)
    {

        $n=mysqli_num_rows($result) ;
 if($n){
echo '<div style="float:right;border-radius:50%;width:auto;padding-left:5px;padding-right:5px;padding-top:1px;padding-bottom:1px;background-color:black">'.$n.'</div>';
    }
 } ?>
