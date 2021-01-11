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
  if(document.getElementById("uname").value=="")
  {
    alert("Enter Username!");
    document.getElementById("uname").focus();
      return false;
  }
  if(document.getElementById("pswd").value=="")
  {
    alert("Enter Password!");
    document.getElementById("pswd").focus();
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
            <img src="images/login1.jpg" alt="login" class="login-card-img"> 
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              	<!--<img src="images/logo3.jpg" alt="logo" class="logo">-->
                <!-- <img src="images/logo2.jpg" alt="logo" class="logo"> -->
                <a href="adminHome.php">
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                </a>
              </div>
              <p class="login-card-description">Add Staff</p>
              <form action="addStaff.php" method="post">
                  <div class="form-group">
                    <input type="name" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="name" name="phone" id="phone" class="form-control" placeholder="Phone Number">
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
include "connect.php";
$name=$_POST['name'];
$phone=$_POST['phone'];
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
$sql1 = "INSERT INTO `staff` (`name`, `phone`, `uname`) VALUES ('$name', '$phone', '$uname');";

$sql2 = "INSERT INTO `login` (`uname`, `pswd`, `type`) VALUES ('$uname', '$pswd', 'staff')";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
echo '<script>alert("Added successfully")</script>';
mysqli_close($conn);
}
?>

