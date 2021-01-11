<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medimission</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <div style="background-image: url('images/bg4.jpg');">

    <script type="text/javascript">
function valid()
{
  if(document.getElementById("name").value=="")
  {
    alert("Enter Name!");
    document.getElementById("name").focus();
      return false;
  }
  if(document.getElementById("phone").value=="")
  {
    alert("Enter Phone!");
    document.getElementById("phone").focus();
      return false;
  }
   if(document.getElementById("dept").value=="")
  {
    alert("Select Department!");
    document.getElementById("dept").focus();
      return false;
  }
  if(document.getElementById("uname").value=="")
  {
    alert("Enter Username!");
    document.getElementById("uname").focus();
      return false;
  }
  if(document.getElementById("day").value=="")
  {
    alert("Enter Available Days!");
    document.getElementById("day").focus();
      return false;
  }
  if(document.getElementById("start").value=="")
  {
    alert("Enter Start time!");
    document.getElementById("start").focus();
      return false;
  }
  if(document.getElementById("endt").value=="")
  {
    alert("Enter End time!");
    document.getElementById("endt").focus();
      return false;
  }
  if(document.getElementById("pswd").value=="")
  {
    alert("Enter password!");
    document.getElementById("pswd").focus();
      return false;
  }
  if(document.getElementById("count").value=="")
  {
    alert("Enter Booking count!");
    document.getElementById("count").focus();
      return false;
  }
  if(document.getElementById("pswd").value!=document.getElementById("pswd2").value)
  {
    alert("Password Does not Match!");
    document.getElementById("pswd").focus();
      return false;
  }

  
}
</script>


</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0"  >
    <div class="container" >
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <!-- <a href="staffHome.php"> -->
            <img src="images/login1.jpg" alt="login" class="login-card-img"> 
            <!-- </a> --> 
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              	<!--<img src="images/logo3.jpg" alt="logo" class="logo">-->
                <a href="adminHome.php">
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                </a>
              </div>
              <p class="login-card-description">Add Doctor</p>
              <form action="" method="post">
                  <div class="form-group">
                    <input type="name" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="name" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                  </div>
                  <!-- <div class="form-group">
                    <input type="name" name="dept" id="dept" class="form-control" placeholder="Department">
                  </div> -->

                  <div class="form-group">
                    <select name="dept" id="dept" class="form-control">
                      <option value="">Select Department</option>
                      <option value="Cardiology">Cardiology</option>
                      <option value="Hepetology">Hepetology</option>
                      <option value="Neurology">Neurology</option>
                      <option value="Pediatrics">Pediatrics</option>
                    </select>  
                  </div>


                  

                  <!-- <div class="form-group">
                    <input type="text" name="day" id="day" class="form-control" placeholder="Available Days">
                  </div> -->

                  <!-- <div class="form-group">
                    <select name="day" id="day" class="form-control">
                      <option value="">Select Day</option>
                      <option value="Monday">Monday</option>
                      <option value="Tuesday">Tuesday</option>
                      <option value="Wednesday">Wednesday</option>
                      <option value="Thursday">Thursday</option>
                      <option value="Friday">Friday</option>
                      <option value="Saturday">Saturday</option>
                    </select>  
                  </div> -->


                  <!-- <div>
                    <label for="exampleInputEmail1">Available Days</label>
                  </div>

                  

                  <div class="form-check form-check-inline">

  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Mon">
  <label class="form-check-label" for="inlineCheckbox1">Mon</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Tue">
  <label class="form-check-label" for="inlineCheckbox2">Tue</label>

</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Wed">
  <label class="form-check-label" for="inlineCheckbox2">Wed</label>
  
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Thu">
  <label class="form-check-label" for="inlineCheckbox2">Thu</label>
  
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fri">
  <label class="form-check-label" for="inlineCheckbox2">Fri</label>
  
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Sat">
  <label class="form-check-label" for="inlineCheckbox2">Sat</label>
  
</div> -->


                  <div class="form-group">
                    <label for="exampleFormControlInput1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStart time</label>
                    <input type="time" name="start" id="start" class="form-control" placeholder="Start time">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnd time</label>
                    <input type="time" name="endt" id="endt" class="form-control" placeholder="End time">
                  </div>

                  <div class="form-group">
                    <input type="name" name="uname" id="uname" class="form-control" placeholder="User Name">
                  </div>




                  <div class="form-group mb-4">
                    <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group mb-4">
                    <input type="password" name="pswd2" id="pswd2" class="form-control" placeholder="Confirm Password">
                  </div>

                 <!--  <div class="form-group mb-4">
                    <input type="text" name="count" id="count" class="form-control" placeholder="No. of Booking/Day">
                  </div> -->

                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="Submit" onclick="return valid()">
                </form>
                
               
            </div>
          </div>
        </div>
      </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  // echo "hiii";
include "connect.php";
$name=$_POST['name'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$uname=$_POST['uname'];
// $day=$_POST['day'];
$start=$_POST['start'];
$endt=$_POST['endt'];
$pswd=$_POST['pswd'];
// $count=$_POST['count'];
$sql1 = "INSERT INTO `doctor` (`name`, `dept`, `phone`, `uname`, `start`, `endt`) VALUES ('$name', '$dept', '$phone', '$uname', '$start', '$endt');";
$sql2 = "INSERT INTO `login` (`uname`, `pswd`, `type`) VALUES ('$uname', '$pswd', 'doctor')";
$sql3 = "INSERT INTO `doctorschedule` (`dname`,`day`) VALUES ('$name','Monday')";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
echo '<script>alert("Added successfully")</script>';
mysqli_close($conn);
}
?>

