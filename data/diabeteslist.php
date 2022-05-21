<?php

$sql="SELECT * FROM diabetes_sym where aadhar='$paadhar' order by dateTime desc;";
$result = mysqli_query($conn, $sql);

    
$errorr=mysqli_error($conn);
if ($errorr) {

    echo '<h1 style="color:red">'.$errorr.'</h1><br><h2>Check for Other way</h2>';    
    }
    else {
        // echo $paadhar,mysqli_num_rows($result);
        if(mysqli_num_rows($result)){

?>
<hr><br>
<center><h2>Latest Predicted Diabetes Reports </h2></center>

    <table>
        <tr>
        <td>Col No</td>
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
    
        ?>