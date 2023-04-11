<?php
 $name=$_POST['f_name'];
 $description=$_POST['f_description'];
 $id=$_POST['f_id'];
include "connect.php";
 $q="UPDATE febric set name='$name',description='$description' WHERE f_id='$id'";
 if($conn->query($q)){

  header("Location:display_febric.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>