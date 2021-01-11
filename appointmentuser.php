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
  
  if(document.getElementById("date").value=="")
  {
    alert("Select Date!");
    document.getElementById("date").focus();
      return false;
  }
  if(document.getElementById("doctor").value=="")
  {
    alert("Select Doctor!");
    document.getElementById("doctor").focus();
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
            <img src="images/login1.jpg" alt="login" class="login-card-img"> 
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              	<!--<img src="images/logo3.jpg" alt="logo" class="logo">-->
                <!-- <img src="images/logo2.jpg" alt="logo" class="logo"> -->
                <a href="userHome.php">
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                </a>
              </div>
              <p class="login-card-description">Appointment</p>
              <form action="" method="post">


                  <!-- <div class="form-group"> -->

                    <!-- <?php 

                
                // include "connect.php";
               
                // $sql = "SELECT max(aid) AS max FROM appointment";
                // $result=mysqli_query($conn, $sql);
                // $row = mysqli_fetch_array($result);
                // $id=++$row['max'];
              // echo $$row['max'];
                    ?>-->

                 <!--  <input type="text" name="aid" id="aid" class="form-control" placeholder="Id" >
                  </div>

                



                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                  </div>

                  <div class="form-group">
                    <select name="gender" id="gender" class="form-control">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                      <option value=""></option>
                    </select>  
                  </div>
                  
                  <div class="form-group">
                    <input type="text" name="age" id="age" class="form-control" placeholder="Age">
                  </div>-->

                  <div class="form-group">
                    <label for="exampleFormControlInput1">&nbspAppointment Date</label>
                    <input type="date" name="date" id="date" class="form-control" value="Appointment Date">
                  </div> 
                  <!-- <div class="form-group mb-4"> -->
                    <!-- <input type="name" name="dept" id="dept" class="form-control" placeholder="Department"> -->
                  <!-- </div> -->
                  <div class="form-group mb-4">
                    <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>

                <?php

                
                include "connect.php";
                $dept=$_POST['dept'];
                $sql = "SELECT name FROM doctor";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

                echo '<option value='. $row['name'] .'>Dr.'. $row['name'] .'</option>';
              }
                
                ?>

              </select>
                  </div>
                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="Submit" value="Submit"  onclick="return valid()">
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
include "connect.php";

$sql2 = "SELECT * FROM user where uname in(SELECT uname from login where status='in')";
     $result2=mysqli_query($conn, $sql2);

$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);


// $aid=$_POST['aid'];

	$dob=$row['dob'];
    $age = (date('Y') - date('Y',strtotime($dob)));
    


$name=$row['name'];
$phone=$row['phone'];
$gender=$row['gender'];
$date=$_POST['date'];
$doctor=$_POST['doctor'];

$unixTimestamp = strtotime($date);
 
//Get the day of the week using PHP's date function.
$day = date("l", $unixTimestamp);
$flag=0;
$sql1 = "SELECT day FROM doctorschedule where dname='$doctor'";
     $result1=mysqli_query($conn, $sql1);
     while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
  {

if(strcmp($day,$row1['day'])==0){
  
  $flag++;

  // header("location:appointment.php");
}
}
if($flag==1){

$sql = "INSERT INTO `appointmentoffline` (`aid`, `name`, `phone`, `gender`, `age`, `date1`, `doctor`) VALUES ('$aid', '$name', '$phone', '$gender', '$age', '$date', '$doctor');";

mysqli_query($conn, $sql);
echo '<script>alert("Booking successful")</script>';
}
else{
  echo '<script>alert("Doctor not available on this date!!")</script>';
}
mysqli_close($conn);
}
?>

