<?php
  require "dbconn.php";

foreach ($_POST['edu_status'] as $id => $status){



$sql6 = "INSERT INTO attendence(attempid,attdate,attstatus)VALUES ('$id',CURDATE(),'$status')";

$result6 = mysqli_query($conn,$sql6);
header('location: home.php');
}

?>
