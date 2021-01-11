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
  <a href="userHome.php" class="text-reset">Home</a>
	<?php
     include "connect.php";
     $sql = "SELECT name,dept,start,endt FROM doctor";
     $result=mysqli_query($conn, $sql);
	echo "
  <form action='' method='post'>
  <table class='table table-striped'>
  <thead>
    <tr align='center'>
      <th scope='col' >SI NO</th>
      <th scope='col'>NAME</th>
      <th scope='col'>DEPARTMENT</th>
      <th scope='col'>AVAILABLE DAYS</th>
      <th scope='col'>START TIME</th>
      <th scope='col'>END TIME</th>
      
      
    </tr>
  </thead>
  <tbody>";
  $si=1;
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  echo "<tr align='center'>";
  echo "<td>" . $si . "</td>";
  echo "<td >Dr." . $row['name'] . "</td>";
  echo "<td>" . $row['dept'] . "</td>";
  echo "<td >";

  $nm=$row['name'];

  $sql1 = "SELECT day FROM doctorschedule where dname='$nm'";
     $result1=mysqli_query($conn, $sql1);
     while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
  {


      echo $row1['day'];
      echo ",";
   }
   echo "</td>";
     echo "<td>" . $row['start'] . "</td>";
     echo "<td>" . $row['endt'] . "</td>";


  // echo "<td><button type='submit' name='submit' class='btn btn-success' onclick=location.href='userHome.php' >Book Appointment</button></td>";

      // echo "<td>
      // <form action='bookdate.php' method='post'>
      //       <button name='go' value='". $row['name'] ."' class='btn btn-success'>Book Appointment</button>
      //   </form>
      // </td>";

  echo "</tr>";
  $si++;
  }
 echo " </tbody>";
 echo "</table>
 </form>";

 mysqli_close($conn);
?>

</body>
</html>

