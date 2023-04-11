<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM customer_order where or_id='$id'";
 if($conn->query($q)){
  header("Location:display_order.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>