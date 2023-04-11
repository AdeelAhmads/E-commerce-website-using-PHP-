<?php
 $name=$_POST['co_name'];
 $description=$_POST['co_description'];
 $id=$_POST['co_id'];
include "connect.php";
 $q="UPDATE color set name='$name',description='$description' WHERE co_id='$id'";
 if($conn->query($q)){
  header("Location:display_color.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>