<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM cart where cart_id='$id'";
 if($conn->query($q)){
  header("Location:display_cart.php");
   
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>