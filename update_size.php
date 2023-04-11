<?php
 $name=$_POST['sz_name'];
 $description=$_POST['sz_description'];
 $id=$_POST['sz_id'];
include "connect.php";
 $q="UPDATE size set name='$name',description='$description' WHERE s_id='$id'";
 if($conn->query($q)){
  header("Location:display_size.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>