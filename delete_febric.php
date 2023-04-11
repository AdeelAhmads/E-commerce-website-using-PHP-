<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM febric where f_id='$id'";
 if($conn->query($q)){
  header("Location:display_febric.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>