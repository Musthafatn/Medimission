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
                <!-- <a href="staffHome.php"> -->
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                <!-- </a> -->
              </div>
              <p class="login-card-description">Delete Doctor</p>
              <form action="" method="post">


                  
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
// echo "aaaa";
if(isset($_POST['submit'])){
include "connect.php";
$doctor=$_POST['doctor'];
$sql="DELETE FROM doctor WHERE name='$doctor'";

if(mysqli_query($conn, $sql))
echo '<script>alert("Delete successful")</script>';
mysqli_close($conn);
}
?>

