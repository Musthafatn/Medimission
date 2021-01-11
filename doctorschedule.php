<!DOCTYPE html>
<html>
<head>
  <title>Medimission</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  
  function Confirm()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}

</script>
</head>
<body>

  <p class="login-card-footer-text">
  <a href="staffHome.php" class="text-reset">Home</a>&nbsp&nbsp&nbsp
  <a href="viewdoctor.php" class="text-reset">Back</a>

 


  <?php
  // echo $_POST['update'];

  if(isset($_POST['update'])){
     include "connect.php";
     $name=$_POST['update'];
     // echo $name;
     $sql = "SELECT day FROM doctorschedule where dname='$name'";
     $result=mysqli_query($conn, $sql);
     // $msg='Are you sure?';
  echo "<table class='table table-striped'>
  <thead>
    <tr align='center'>
      <th scope='col' >SI NO</th>
      <th scope='col'>AVAILABLE DAY</th>
      
    </tr>
  </thead>
  <tbody>";
  $si=1;
 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
  echo "<tr align='center'>";
  echo "<td>" . $si . "</td>";
  
  echo "<td>" . $row['day'] . "</td>";
  echo "<td>
      
      <form action='' method='post'>

            <input type='text' name='name' value=".$name." style='visibility:hidden'>

            <button name='delete' value='". $row['day'] ."' class='btn btn-success' onclick='confirm()'>Delete</button>
        </form>
      
      </td>";
  
  $si++;
}
 
 echo " </tbody>";
 echo "</table>";

 echo'
  <form action="" method="post" class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Day" aria-label="Search" name="day">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="add" value="'. $name .'" >Add</button>
        </form>';
     
 mysqli_close($conn);
}
?>

</body>
</html>

<?php
// echo "aaaa";
if(isset($_POST['delete'])){
include "connect.php";
$day=$_POST['delete'];
$name=$_POST['name'];
// echo $day;
// echo $name;
$sql="DELETE FROM doctorschedule WHERE dname='$name' and day='$day'";

if(mysqli_query($conn, $sql))
  // echo '<script>alert("Delete successful")</script>';
  header("location:viewdoctor.php");
 // echo '<script>alert("Delete successful")</script>';
mysqli_close($conn);
}
?>

<?php
// echo "aaaa";
if(isset($_POST['add'])){
include "connect.php";
$name=$_POST['add'];
$day=$_POST['day'];
// echo $day;
// echo $name;
$sql="INSERT INTO `doctorschedule` (`dname`, `day`) VALUES ('$name', '$day');";

if(mysqli_query($conn, $sql))
  // echo '<script>alert("Delete successful")</script>';
  header("location:viewdoctor.php");
 // echo '<script>alert("Delete successful")</script>';
mysqli_close($conn);
}
?>