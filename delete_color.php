<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM color where co_id='$id'";
 if($conn->query($q)){
  header("Location:display_color.php");
   
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>