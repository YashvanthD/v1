<style>
    body{
        background-color: gray;

    }
    h1{
        color: black;
    }
    
</style>
<link rel="stylesheet" href="style.css">

<center>
    <h1>
        Error
    </h1>
    <hr>
    <br>
    <br>
    <h3>
    <?php    
    session_start();
    if(isset($_SESSION['emsg']))
   
   { echo  $_SESSION['emsg'];
    unset($_SESSION['emsg']);
   }
    ?>
    <br>
    <br>
    <br><hr>
    <button onclick="javascript:window.history.back(-1);return false;">Back</button>

    </h3>
</center>