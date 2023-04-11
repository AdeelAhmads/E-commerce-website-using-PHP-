<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM type where t_id='$id'";
 if($conn->query($q)){
  header("Location:display_type.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>