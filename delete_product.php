<?php
 
 $id=$_GET['ID'];
include "connect.php";
$q="DELETE FROM product where pro_id='$id'";
 if($conn->query($q)){
  header("Location:display_products.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>