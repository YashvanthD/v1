<?php
session_start();

if (!isset($_SESSION['patient'])) {
  echo '<meta http-equiv="refresh" content="0; url=/hospital">';
} else {

  $u = ucwords($_SESSION['patient']);
  $dob = $_SESSION['pdob'];
  $add = $_SESSION['padd'];
  $mbl = $_SESSION['pmbl'];
  $gender = $_SESSION['pgender'];
  $mail = $_SESSION['pmail'];
  include '../data/loadpatient.php';
  $pid = $_SESSION['pid'];
?>


  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $u; ?></title>
    <style>

    </style>
    <link rel="stylesheet" href="../style.css">
    <script src="../js.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  </head>

  <body>

    <div class="header sticky" id="myHeader">
      <center>
        <h2>Siddaganga Instutute of Technology</h2>
      </center>
    </div>
    <div></div>
    <div class="sidenav">
      <button class="tablink" onclick="openCity('home', this, 'red')" id="defaultOpen">Home</button><br>
      <button class="tablink" onclick="openCity('profile', this, 'green')">Profile</button><br>
      <button class="tablink" onclick="openCity('update', this, 'blue')">Update</button><br>
      <button class="tablink" onclick="openCity('app', this, 'orange')">Add New Appointment</button>
      <button class="tablink" onclick="openCity('viewpendapp', this, '	#00008B')">Pending appointments</button>
      <button class="tablink" onclick="openCity('viewacpdapp', this, 'maroon')">Accepted Appointments</button>
      <button class="tablink" onclick="openCity('viewcompleted', this, 'red')">Completed Appointments</button>
      <button class="tablink" onclick="openCity('notification', this, 'sky-blue')">Notifications <?php include 'notify.php'; ?></button>
      <button class="tablink" onclick="openCity('latest', this, 'black')">My latest Report</button>
      <button class="tablink" onclick="window.location='logout.php';">Logout</button>
    </div>


    <div class="main">
      <h2>Hi <?php echo $u; ?> </h2>
      <div class="content">

        <div id="home" class="tabcontent">
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('report', this, 'white')">Predict Report</button><br>

        </div>

        <link href="../checkbox.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <div id="report" class="tabcontent">
          <!-- <div style="float:left">
        Don't Save  <input type="radio" name="saving" onclick="addrowdb(0)" value="0" > 
        Save <input type="radio" name="saving" onclick="addrowdb(1)" value="1" > 
          </div> -->
          <br>
          <center>
            
            <!-- <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" onchange="addrowdb()" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="mySwitch" style="float:left">Save </label>
            </div> -->
            <hr>
            <iframe src="https://d237-3-23-94-58.ngrok.io/" style="width:100%;height:40rem;"></iframe>
          </center>
        
       

        </div>

        <div id="profile" class="tabcontent">
          <h2>My Profile</h2>
          <hr>
          <center>
            <table style="border:unset;padding:20px;margin:15px;border:unset;background-color:white;width:40%;">
              <tr>
                <td>Name
                <td>:</td>
                </td>
                <td><?php echo $u; ?></td>
              </tr>
              <tr>
                <td>Patient Id
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['pid']; ?></td>
              </tr>
              <tr>
                <td>Date of Birth
                <td>:</td>
                </td>
                <td><?php echo $dob; ?></td>
              </tr>
              <tr>
                <td>Gender
                <td>:</td>
                </td>
                <td><?php echo $gender; ?></td>
              </tr>             
               <tr>
                <td>Aadhar No
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['paadhar']; ?></td>
              </tr>
              <tr>
                <td>Father Name
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['pfather']; ?></td>
              </tr>
              <tr>
                <td>Mother Name
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['pmother']; ?></td>
              </tr>
              <tr>
                <td>Address
                <td>:</td>
                </td>
                <td><?php echo  $add; ?></td>
              </tr>
              <tr>
                <td>Mobile No
                <td>:</td>
                </td>
                <td><?php echo $mbl; ?></td>
              </tr>
              <tr>
                <td>Height
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['phgt']; ?></td>
              </tr>
              <tr>
                <td>Weight
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['pwt']; ?></td>
              </tr>
              <tr>
                <td>Blood Group
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['pblood']; ?></td>
              </tr>
              <tr>
                <td>Password
                <td>:</td>
                </td>
                <td><?php echo $_SESSION['ppassword']; ?></td>
              </tr>
            </table>
          </center>
        </div>


        <div id="update" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('passreset', this, 'white')">Update Password</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('mblreset', this, 'white')">Update phone</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('addreset', this, 'white')">Update Address</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('wreset', this, 'white')">Update Weight</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('hreset', this, 'white')">Update Height</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('mreset', this, 'white')">Update mail</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('preset', this, 'white')">Update Parents details</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('breset', this, 'white')">Update Blood Group</button><br>
          <button style="border:unset;width:350px;height:40px;font-size:20px; background-color:white" onclick="openCity('licreset', this, 'white')">Update LIC</button><br>
        </div>

        <div id="passreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <form action="updatepassword" method=POST>
              <table style="padding:20px;margin:15px;border:unset;background-color:white">
                <tr>
                  <td> Password : </td>
                  <td><input type="text" name="pass"><br></td>
                </tr>
                <tr>
                  <td> Reenter Password : </td>
                  <td> <input type="text" name="pass2"><br></td>
                </tr>
                <tr>
                  <td colspan="2"><input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Reset"></td>
                </tr>
              </table>
            </form>
          </center>
        </div>

        <div id="mblreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updatembl" method=POST>
                <tr>
                  <td> New Mobile Number :</td>
                  <td><input type="number" required name=pass pattern="[0-9]{10}"></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>

          </center>
        </div>

        <div id="addreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updateadd" method=POST>
                <tr>
                  <td> Address :</td>
                  <td><textarea type="text" required name=pass cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>

          </center>
        </div>


        <div id="wreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updatewt" method=POST>
                <tr>
                  <td> Weight :</td>
                  <td><input type="number" required name=pass></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>

          </center>
        </div>



        <div id="hreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updateht" method=POST>
                <tr>
                  <td> Height :</td>
                  <td><input type="text" required name=pass></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>
          </center>
        </div>


        <div id="mreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updatem.php" method=POST>
                <tr>
                  <td> Mail :</td>
                  <td><input type="mail" required name=pass></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>
          </center>
        </div>


        <div id="preset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <form action="updateparents" method=POST>
              <table style="padding:20px;margin:15px;border:unset;background-color:white">
                <tr>
                  <td> Father Name : </td>
                  <td><input type="text" name="pass"><br></td>
                </tr>
                <tr>
                  <td> Mother Name : </td>
                  <td> <input type="text" name="pass2"><br></td>
                </tr>
                <tr>
                  <td colspan="2"><input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </table>
            </form>
          </center>
        </div>



        <div id="breset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updateb" method=POST>
                <tr>
                  <td> Blood group :</td>
                  <td><input type="text" required name=pass></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>
          </center>
        </div>




        <div id="licreset" class="tabcontent">
          <h1>Update</h1>
          <hr>
          <center>
            <table style="padding:20px;margin:15px;border:unset;background-color:white">
              <form action="updatelic" method=POST>
                <tr>
                  <td> LIC :</td>
                  <td><input type="text" required name=pass></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2"> <input style="width:100%;height:40px;font-size:20px; background-color:white" type="submit" value="Update"></td>
                </tr>
              </form>
            </table>
          </center>
        </div>



        <div id="app" class="tabcontent">
          <h3>Add Appointment</h3>
          <hr>

          <!-- 
 
</head>
Specialist : <input type="text" name="specialist" id="specialist" placeholder="Type for Specialist">  

Doctor : <input type="text" name="hospital" id="search" value="">  


<script type="text/javascript">
  $(function() {
     $( "#specialist" ).autocomplete({
       source: '../ajax/ajax-db-searchspecialist.php',
     });
  });

  $("#specialist").on('keypress', function(e) {
  });
</script>
<br>
</head> -->

          <center>
            <div class="container mt-5">

              <form action="reqapp.php" method=POST>

                Specialist :

                <select class="form-control " name="spe" id="country-dropdown">
                  <option value="">Select Specialist</option>
                  <?php
                  include "../assets/conn.php";
                  $result = mysqli_query($conn, "SELECT * FROM doctor group by specialization order by specialization ");
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <option value="<?php echo $row['specialization']; ?>"><?php echo $row["specialization"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
                <br>
                <div class="form-group">
                  Hospital <select name="hosp" class="form-control" id="state-dropdown"> </select>
                </div>
                <br>
                <div class="form-group">
                  Doctor <select name="doct" class="form-control" id="city-dropdown"> </select>
                </div>
                <br>
                <div class="form-group">
                  Disease / Cause <br> <textarea name=disease required cols="35" rows="4"></textarea>

                </div>
                <br>
                <div class="form-group">
                  Date <br> <input name=date type="date" required>
                </div>
                <br>
                <div class="form-group">
                  Time <br><input type="time" name="time" required> </select>
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" Value=Submit>
                </div>
            </div>



            </form>

          </center>
          <script>
            $(document).ready(function() {
              $('#country-dropdown').on('change', function() {
                var spe = this.value;
                $.ajax({
                  url: "../ajax/ajax-hospital.php",
                  type: "POST",
                  data: {
                    specialization: spe
                  },
                  cache: false,
                  success: function(result) {
                    $("#state-dropdown").html(result);
                    $('#city-dropdown').html('<option value="">Select Doctor</option>');
                  }
                });
              });

              $('#state-dropdown').on('change', function() {
                var hosp = this.value;

                $.ajax({
                  url: "../ajax/ajax-doctor.php",
                  type: "POST",
                  data: {
                    hosp: hosp
                  },
                  cache: false,
                  success: function(result) {
                    $("#city-dropdown").html(result);
                  }
                });
              });
            });
          </script>



        </div>


        <div id="viewpendapp" class="tabcontent">
          <h3>Pending Appointment</h3>
          <hr>
          <?php
          $pid = $_SESSION['pid'];
          include '../data/patientrequestedapp.php';
          echo $table;
          ?>

        </div>


        <div id="viewacpdapp" class="tabcontent">
          <h3>Accepted Appointment</h3>
          <hr>
          <?php include '../data/patientacceptedapp.php';
          echo $table;
          ?>
        </div>

        <div id="viewcompleted" class="tabcontent">
          <h3>Completed Appointments</h3>
          <hr>
          <?php
          $pid = $_SESSION['pid'];
          include '../data/completedappp.php';
          echo $table;
          ?>

        </div>

        <div id="notification" class="tabcontent">

          <?php include 'notification.php'; ?>
        </div>


        <div id="latest" class="tabcontent">

          <?php include 'latest.php'; ?>

        </div>



      </div>
    </div>

    <style>
      tr:hover {
        background-color: white;
      }
    </style>





    <script>
function addrowdb(val){
  alert(val)
  <?php

  ?>
}
    </script>

  </body>

  </html>


  </body>

  </html>


<?php
}
?>