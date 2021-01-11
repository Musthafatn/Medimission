<?php
include "connect.php";
$sql2 = "UPDATE login SET status='out' WHERE status='in'";
mysqli_query($conn, $sql2);
echo '<script>alert("Logged out")</script>';
echo '<script>location.href="index.php"</script>';
mysqli_close($conn);
?>