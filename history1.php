<!DOCTYPE html>
<html>
<head>
	<title>Medimission</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

  <p class="login-card-footer-text">
  <a href="doctorHome.php" class="text-reset">Home</a>

	


	<?php
  if(isset($_POST['go'])){
     include "connect.php";
     $name=$_POST['go'];
     $sql = "SELECT doctor,date1,prescription FROM appointmentoffline where name='$name'";
     $result=mysqli_query($conn, $sql);
	echo "<table class='table table-striped'>
  <thead>
    <tr align='center'>
      <th scope='col' >SI NO</th>
      <th scope='col'>DOCTOR NAME</th>
      <th scope='col'>DATE</th>
      <th scope='col'>PRESCRIPTION</th>
    </tr>
  </thead>
  <tbody>";
  $si=1;
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  echo "<tr align='center'>";
  echo "<td>" . $si . "</td>";
  echo "<td>Dr." . $row['doctor'] . "</td>";
  echo "<td>" . $row['date1'] . "</td>";
  echo "<td>" . $row['prescription'] . "</td>";
  
  $si++;
  }
 echo " </tbody>";
 echo "</table>";
 mysqli_close($conn);
}
?>


</body>
</html>