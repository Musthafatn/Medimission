<?php
if(isset($_POST['feed'])){
include "connect.php";
$message=$_POST['message'];
$sql = "INSERT INTO `feedback` (`feedback`) VALUES ('$feedback');";
if(mysqli_query($conn, $sql));{
  echo '<script>alert("Feedback sent successfully")</script>';
}
mysqli_close($conn);
}

?>
