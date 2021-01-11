
<?php

// if(isset($_POST['consult'])){  
  // $pn=$_POST['consult'];
// }

if(isset($_POST['submit'])){
include "connect.php";
$pn=$_POST['submit'];
$prescription=$_POST['prescription'];
$sql= "UPDATE `appointmentoffline` SET `prescription` = '$prescription' WHERE `name` = '$pn'";

mysqli_query($conn, $sql);

echo '<script>alert("Added successfully")</script>';
mysqli_close($conn);
//header("location:consulttable.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <script>
function goBack()
 {
  if(document.getElementById("prescription").value=="")
  {
    alert("Enter Prescription!");
    document.getElementById("prescription").focus();
      return false;
  }
  // else{
  // window.history.back();
  //   }
}
</script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Medimission</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <div style="background-image: url('images/bg4.jpg');">
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
                <a href="doctorHome.php">
                <img src="images/logo2.jpg" alt="logo" class="logo" >
                </a>
              </div>
              <p class="login-card-description"><?php if(isset($_POST['consult'])){ echo $_POST['consult'];}?></p>
              <form action="" method="post">
                 

                  <!-- <div class="form-group">
                    <input type="name" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="name" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="name" name="uname" id="uname" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group mb-4">
                    <input type="password" name="pswd" id="password" class="form-control" placeholder="Password">
                  </div> -->

                  <div class="form-group">
                    
                  </div>

                  <div class="form-group">
                <textarea class="form-control" name="prescription" id="prescription" rows="1" data-rule="required" data-msg="Please write something for us" placeholder="Prescription"></textarea>
                <div class="validate"></div>
              </div>

              <p class="login-card-footer-text">
  <a href="medicinetable.php" class="text-reset">Medicines</a>&nbsp&nbsp
  <a href="labtesttable.php" class="text-reset">Lab tests</a>
</p>

                  <button name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="<?php if(isset($_POST['consult'])){ echo $_POST['consult'];}?>" onclick="return goBack()">Submit</button>
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






