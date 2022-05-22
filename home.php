<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
</head>

<body>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    body {
      font-family: Arial;

    }

    img {
      background-image: url('./images/medical.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      opacity: 0.1;
    }

    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      margin-top: 20px;
    }


    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    .header {
      padding: 10px 16px;
      width: 100%;

      color: black;
    }

    .tabcontent {
      padding: 15px;
      margin: 30px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {

      margin-top: 30px;
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      box-shadow: 0 1px 10px 1px black;

    }

    .login {
      margin-left: auto;
      margin-right: auto;
      align-items: center;
      max-width: 20%;
      align-content: center;
      text-align: center;

      max-height: 30rem;
      min-height: 30rem;
    }

    input[type="submit"] {
      width: 150px;
      height: 30px;
    }

    input[type="submit"]:hover {
      background-color: rgb(238, 238, 238);
    }

    table {
      align-items: center;
      padding: 15px;
    }

    input[type="text"],
    input[type="password"],
    input[type="submit"],
    input[type="mail"],
    .logup {
      min-width: 250px;
      height: 40px;
      margin: 10px;
    }

    input[type="radio"] {
      margin: 10px;
    }

    .names td {
      padding: 15px;
      margin: 10px;
    }
  </style>
  </head>
  <script src="js.js"></script>

  <body>

    <div class="header" id="myHeader">
      <center>
        <h2>Siddaganga Instutute of Technology</h2>
        <h3>Online E-Record Portal</h3>
      </center>
    </div>

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
      <button class="tablinks" onclick="openCity(event, 'about')">About</button>
      <button class="tablinks" onclick="openCity(event, 'contact')">Contact </button>
    </div>

    <script>
      document.getElementById("defaultOpen").click();
    </script>

    <div class="tab" style="float:right;">
      <button class="tablinks" onclick="openCity(event, 'patient')">Patient</button>
      <button class="tablinks" onclick="openCity(event, 'doctor')">Doctor</button>
      <button class="tablinks" onclick="openCity(event, 'admin')">Admin</button>
    </div>


    </div>
    <div id="home" class="tabcontent m-15">
      <h3>Electronic Hospital Management </h3>
      <div class='login'>
        This is home
      </div>
    </div>



    <div id="about" class="tabcontent">
      <h3>About us</h3>
      <div class='login'>
        We are Team of Siddaganga <br> Information Science and Engineering
        <br>
        <br>
        <table class="names">
          <tr>
            <td> B Sagar</td>
            <td>1SI18IS011</td>
          </tr>
          <tr>
            <td> Anakha</td>
            <td>1SI18IS008</td>
          </tr>
          <tr>
            <td> Ritika</td>
            <td>1SI18IS024</td>
          </tr>
          <tr>
            <td> Sara</td>
            <td>1SI18IS046</td>
          </tr>
        </table>
      </div>

    </div>

    <div id="contact" class="tabcontent">
      <h3>Contact us</h3>
      <div class='login'>
        <table>
          <form action="assets/querry.php" method=POST>
            <tr>
              <td>Name</td>
              <td><input style="width:150px;height:25px;margin:5px;" type="text" name=name></td>
            </tr>
            <tr>
              <td>email</td>
              <td><input style="width:150px;height:25px;margin:5px;" type="mail" name=mail></td>
            </tr>
            <tr>
              <td>querry</td>
              <td><input style="width:150px;height:50px;margin:5px;" type="text" name=querry></td>
            </tr>
            <tr>
              <td>Ratings</td>
              <td style="margin:5px;">
                <input type="radio" name=rate>1
                <input type="radio" name=rate>2
                <input type="radio" name=rate>3
                <input type="radio" name=rate>4
                <input type="radio" name=rate>5

              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit"></td>
            </tr>
          </form>
        </table>
      </div>
    </div>






    <div id="patient" class="tabcontent">
      <h3>Patient</h3>
      <div class='login'>

        <table>
          <form action="loginpatient.php" method=POST>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td>User Name</td>
              <td><input type="text" name='user'> </td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name=pass></td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit"></td>
            </tr>
          </form>

          <tr>
            <td colspan="2"><a href="patient/upform.php"><button class="logup">Logup</button></a></td>
          </tr>
        </table>

      </div>
    </div>

    <div id="doctor" class="tabcontent">
      <h3>Doctor</h3>
      <div class='login'>

        <table>
          <tr>
            <td colspan="2">
              <hr>
            </td>
          </tr>
          <form action="logindoctor.php" method="POST">
            <tr>
              <td>Doctor Name</td>
              <td><input type="text" name=user> </td>
            </tr>
            <tr>
              <td>password</td>
              <td><input type="password" name=pass></td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit"></td>
            </tr>
          </form>
        </table>

      </div>
    </div>
    </div>

    <div id="admin" class="tabcontent">
      <h3>Admin</h3>
      <div class='login'>
        <table>
          <tr>
            <td colspan="2">
              <hr>
            </td>
          </tr>
          <form action="loginadmin" method=POST>
            <tr>
              <td>Admin </td>
              <td><input type="text" name=user> </td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name=pass></td>
            </tr>
            <tr>
              <td colspan="2">
                <hr>
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit"></td>
            </tr>
          </form>
        </table>
      </div>
    </div>

    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>

  </body>

</html>