<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM size where s_id='$id'";
 if($conn->query($q)){
  header("Location:display_size.php");

    
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>