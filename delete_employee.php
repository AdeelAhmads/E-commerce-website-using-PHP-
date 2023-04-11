<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM employee where em_id='$id'";
 if($conn->query($q)){
  header("Location:display_employee.php");
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>