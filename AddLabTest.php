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
    alert("Enter Test Name!");
    document.getElementById("name").focus();
      return false;
  }
  if(document.getElementById("amt").value=="")
  {
    alert("Enter Amount!");
    document.getElementById("amt").focus();
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
                <a href="staffHome.php">
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                </a>
              </div>
              <p class="login-card-description">Add Lab Test</p>
              <form action="" method="post">
                  <div class="form-group">
                    <input type="name" name="name" id="name" class="form-control" placeholder="Test Name">
                  </div>
                  <div class="form-group">
                    <input type="name" name="amt" id="amt" class="form-control" placeholder="Amount">
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
$amt=$_POST['amt'];
$sql = "INSERT INTO `labtest` (`name`, `amount`) VALUES ('$name', '$amt');";
if(mysqli_query($conn, $sql));{
  echo '<script>alert("Added successfully")</script>';
}
mysqli_close($conn);
}
?>

