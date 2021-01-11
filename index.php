



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
  if(document.getElementById("uname").value=="")
  {
    alert("Enter UserName!");
    document.getElementById("uname").focus();
      return false;
  }
  if(document.getElementById("password").value=="")
  {
    alert("Enter Password!");
    document.getElementById("password").focus();
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
                <img src="images/logo2.jpg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Login</p>
              <form action="" method="post" >
                  <div class="form-group">
                    <input type="name" name="uname" id="uname" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group mb-4">
                    <input type="password" name="pswd" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="Login" onclick="return valid()">
                </form>
                <!--<a href="forgot_password.php" class="forgot-password-link">Forgot Password?</a>-->
                <p class="login-card-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
               
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
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
$sql1 = "SELECT * FROM login WHERE uname='$uname' AND pswd='$pswd'";
$result = mysqli_query($conn, $sql1);
$sql2 = "UPDATE login SET status='in' WHERE uname='$uname' AND pswd='$pswd'";
mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) == 1) {
  $row=mysqli_fetch_array($result);
  $type=$row[2];
  console.log("Message here");
  if($type=='admin'){
    header("location:adminHome.php");
  }
  elseif($type=='doctor'){
    header("location:doctorHome.php");
  }
  elseif($type=='staff'){
    header("location:staffHome.php");
  }
  else{
    
    header("location:userHome.php");
  }
  }
else {
 echo '<script>alert("Invalid UserName or password...!")</script>';
}
mysqli_close($conn);
}
?>