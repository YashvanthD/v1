<?php 

include 'conn.php';

$sql = "CREATE  TABLE IF NOT EXISTS admin(
    name varchar(150) PRIMARY KEY,
    password varchar(150))
    ;";  

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);

$sql = "  INSERT INTO admin 
SELECT * FROM (SELECT 'admin', '123') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM admin WHERE name = 'admin'
) LIMIT 1;
 
 ";


$result = mysqli_query($conn, $sql);

$error=mysqli_error($conn);
if($error){
echo $error; 
}
?>