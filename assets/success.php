<style>
    body{
        background-color: #fff;

    }
    h1{
        color: green;
    }
    
</style>
<link rel="stylesheet" href="style.css">
<center>
    <h1>
        Success
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