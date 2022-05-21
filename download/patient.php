<?php

require("../assets/conn.php");

// get Users
$query = "SELECT * FROM patient";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($conn));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: csv; charset=utf-8');
header('Content-Disposition: attachment; filename=patients.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array_keys($row));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>