<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="style.css">

    <style>
table,
td,
tr {
    padding: 5px;
    margin: 5px;
    border: 2px solid black;
    background-color: #f9f9fd;
}

table {
    box-shadow: 0 10px 50px 10px black;
}

a{
    text-decoration:unset;
    text-decoration:unset;
    color:black;
}
button{
    width: 150px;
    border-radius:8px;
    height: 30px;
    background-color: #1b9a50;;
    font-size: 20px;
    color:black;
    text-align: center;
}

td {
   
    padding: 10px;
}

input[type="submit"] {
    width: 150px;
    border-radius:8px;
    height: 30px;
    background-color: #1b9a50;;
    font-size: 20px;
 
    text-align: center;
}

body {
    background-color: #263238;
    color: black;
}
input[type="text"],input[type="date"],input[type="number"],textarea {
 width:100%;
}

h1,h2{
    text-shadow: 10px 10px 5px black;
}
</style>
</head>
<body>
<center>    
<h1 style="color:white">
    Siddaganga Institute of Technology
</h1>
<!-- 
<h2 style="color:yellow">
    Healthcare Center
</h2>
</center> -->
<br>

<?php include 'formcontent.php';?>
</body>
</html>

