<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM customer where cus_id='$id'";
 if($conn->query($q)){
  header("Location:display_customer.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>