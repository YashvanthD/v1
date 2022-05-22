<?php

$sql = "SELECT * FROM diabetes_sym where aadhar='$paadhar' order by dateTime desc;";
$result = mysqli_query($conn, $sql);


$errorr = mysqli_error($conn);
if ($errorr) {

    echo '<h1 style="color:red">' . $errorr . '</h1><br><h2>Check for Other way</h2>';
} else {
    // echo $paadhar,mysqli_num_rows($result);
    if (mysqli_num_rows($result)) {

?>
        <hr><br>
        <center>
            <h2>Predicted Diabetes Reports </h2>
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
                <td>Results</td>
            </tr>
            <tr>

                <?php
                $i = 1;

                $Nrow = mysqli_num_rows($result);

                while ($i <= $Nrow) {
                    echo ' <td>' . $i . '</td>';
                    $rows = mysqli_fetch_assoc($result);
                    foreach ($rows as $value) {
                        echo "<td>" . $value . "</td>";
                    }

                    echo '</tr>';
                    $i += 1;
                }
             
                ?>
            </tr>
        </table>

     
        </center>
<?php
    }
}

?>
