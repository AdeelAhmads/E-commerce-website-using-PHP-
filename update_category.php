<?php
 $price=$_POST['catg_price'];
 $description=$_POST['catg_description'];
 $id=$_POST['catg_id'];
 echo $price." ".$description." ".$id;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";
$conn = new mysqli($servername, $username, $password, $dbname);
 $q="UPDATE category set price='$price',description='$description' WHERE cat_id='$id'";
 if($conn->query($q)){
    
  header("Location:display_category.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>