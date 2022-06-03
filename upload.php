


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>JDN</title>
</head>

<body bgcolor="#c5abc7">

    <center>
        <header>
            <h1>Siddaganaga Institute of Technology</h1>
            <h2>Information Sceince and Engineering</h2>

        </header>

        </head>

        <section style="color: white;">
            <nav id="navbar">
            <button class="button3" onclick=window.location='./home.php'>Home</button>
            <button class="button3" onclick=window.location='./notes.php'>Notes</button>
            <button class="button3" onclick=window.location='./upload.php'>Upload</button>
                <button class="button3" onclick=window.location='./about'>About</button>

            </nav>

            <article style="background: #282b2c;">


            
            <form enctype="multipart/form-data" action="uploadto.php" method="POST">
                 <!-- MAX_FILE_SIZE must precede the file input field -->
                   <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                       <!-- Name of input element determines name in $_FILES array -->
                       Send this file: <input name="uploadfile" type="file" />
                        <input type="submit" name="upload" value="Send File" />
            </form>



    <div>
    <?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>


    </div>




        
  </form>

            </article>

        </section>



        <footer>
            By team of Siddaganga Institute of Technology &#169
        </footer>

</body>


<link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js "></script>
<link rel="stylesheet " href="C:\Users\Admin\OneDrive\Desktop\Mini\CODES\DjangoDJN\JDN\pages\button.css ">

</html>


<style>
    .column {
        float: left;
        width: 30%;
        padding: 0 20px;
    }
    /* Remove extra left and right margins, due to padding */
    
    .row {
        width: 100%;
        margin: 0 50px;
    }
    /* Clear floats after the columns */
    
    .row:after {
        content: " ";
        display: table;
        clear: both;
    }
    /* Responsive columns */
    
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            margin: 0 0;
        }
    }
    /* Style the counter cards */
    
    .card {
        box-shadow: 0 8px 50px 20px rgba(2, 2, 2, 0.2);
        padding: 20px;
        text-align: center;
        margin: 20px;
        background-color: #f1f1f1;
    }
    
    .card:hover {
        box-shadow: 0 80px 160px 0 rgba(245, 0, 0, 0.521);
    }
    
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    nav {
        float: left;
        width: 20%;
        height: 3000px;
        /* only for demonstration, should be removed */
        background: #ccc;
        padding: 20px;
    }
    
    nav ul {
        list-style-type: none;
    }
    
    article {
        float: left;
        padding: 20px;
        height: 3000px;
        width: 80%;
        background: rgb(248, 237, 237);
        /* only for demonstration, should be removed */
    }
    /* Clear floats after the columns */
    
    section::after {
        content: " ";
        display: table;
        clear: both;
        height: 200%;
        width: 80%;
    }
    
    * {
        box-sizing: border-box;
    }
    /* The grid: Three equal columns that floats next to each other */
    
    .column1 {
        float: left;
        width: 33.33%;
        padding: 10px;
        text-align: center;
        font-size: 25px;
        cursor: pointer;
        color: white;
    }
    
    .containerTab1 {
        padding: 20px;
        color: white;
    }
    /* Clear floats after the columns */
    
    .row1:after {
        content: "";
        display: table;
        clear: both;
    }
    /* Closable button inside the container tab */
    
    .closebtn1 {
        float: right;
        color: white;
        font-size: 40px;
        cursor: pointer;
    }
    
    .header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
    }
    
    #navbar {
        overflow: hidden;
        background-color: #333;
    }
    
    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    
    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    
    #navbar a.active {
        background-color: #04AA6D;
        color: white;
    }
    
    .content {
        padding: 16px;
    }
    
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }
    
    .sticky+.content {
        padding-top: 60px;
    }
    
    #myProgress {
        width: 100%;
        background-color: #ddd;
    }
    
    #myBar {
        width: 1%;
        height: 30px;
        background-color: #4CAF50;
    }
    
    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }
    
    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }
    
    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }
    
    .button:hover span {
        padding-right: 25px;
    }
    
    .button:hover span:after {
        opacity: 1;
        right: 0;
    }
    
    .button2 {
        position: relative;
        background-color: #4CAF50;
        border: none;
        font-size: 18px;
        color: #FFFFFF;
        padding: 20px;
        width: 100%;
        text-align: center;
        transition-duration: 0.1s;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
    }
    
    .button2:after {
        content: " ";
        background: #f1f1f1;
        display: block;
        position: absolute;
        padding-top: 300%;
        padding-left: 350%;
        margin-left: -20px !important;
        margin-top: -120%;
        opacity: 0;
        transition: all 0.2s
    }
    
    .button2:active:after {
        padding: 0;
        margin: 0;
        opacity: 1;
        transition: 0s;
    }
    
    .button3 {
        display: inline-block;
        padding: 15px 25px;
        width: 100%;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 0px;
        box-shadow: 0 15px #333;
    }
    
    .button3:hover {
        background-color: #3e8e41
    }
    
    .button3:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    
    * {
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    /* Style the header */
    
    header {
        background-color: rgba(46, 12, 12);
        padding: 30px;
        text-align: center;
        font-size: 35px;
        color: white;
    }
    /* Create two columns/boxes that floats next to each other */
    /* Style the list inside the menu */
    /* Style the footer */
    
    input.button {
        width: 20%;
        height: 20px;
    }
    
    footer {
        background-color: rgba(0, 0, 0, 0.185);
        padding: 10px;
        width: 100%;
        position: fixed;
        bottom: 0;
        text-align: center;
        color: white;
    }
    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    
    @media (max-width: 600px) {
        nav,
        article {
            width: 100%;
            height: auto;
        }
    }
    
    .header {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
    }
</style>





</center>

</body>

</html>