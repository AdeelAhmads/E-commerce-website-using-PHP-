<?php
 
 $id=$_GET['ID'];
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myweb";
// $conn = new mysqli($servername, $username, $password, $dbname);
include "connect.php";
$q="DELETE FROM category where cat_id='$id'";
 if($conn->query($q)){
  header("Location:display_category.php");
   
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>