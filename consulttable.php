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
  <a href="DoctorHome.php" class="text-reset">Home</a>
  <!-- <form action='consulttable.php' method='post'>
            <button name='consult' value='consult' class='btn btn-success'>Consult</button>
        </form> -->
	<?php
  // echo $_POST['search'];
  if(isset($_POST['submit'])){
  $d=$_POST['search'];
}
else{
  $d=$_POST['go'];
}
     include "connect.php";
     $sql = "SELECT * FROM appointmentoffline where date1='$d' and doctor in(SELECT name from doctor where uname in(SELECT uname from login where status='in'))";
     $result=mysqli_query($conn, $sql);
	echo "<table class='table table-striped'>
  <thead>
    <tr align='center'>
      <th scope='col' >SI NO</th>
      <th scope='col'>NAME</th>
      <th scope='col'>PHONE</th>
      <th scope='col'>GENDER</th>
      <th scope='col'>AGE</th>
      <th scope='col'>Consult</th>

      
    </tr>
  </thead>
  <tbody>";
  $si=1;
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  echo "<tr align='center'>";
  echo "<td>" . $si . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>
      <form action='consult.php' method='post'>
            <button name='consult' value='". $row['name'] ."' class='btn btn-success'>Consult</button>
        </form>
      </td>";
  
  echo "</tr>";
  $si++;
  }
 echo " </tbody>";
 echo "</table>";
 mysqli_close($conn);
?>

</body>
</html>