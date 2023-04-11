<?php
 $name=$_POST['t_name'];
 $description=$_POST['t_description'];
 $id=$_POST['t_id'];
include "connect.php";
 $q="UPDATE type set name='$name',description='$description' WHERE t_id='$id'";
 if($conn->query($q)){
  header("Location:display_type.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>