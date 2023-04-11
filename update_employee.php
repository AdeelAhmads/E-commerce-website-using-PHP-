<?php
 $name=$_POST['em_name'];
 echo "password: " . $pass;
 $id=$_POST['em_id'];
include "connect.php";
 $q="UPDATE employee set name='$name' WHERE em_id='$id'";
 if($conn->query($q)){
  header("Location:display_employee.php");
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>