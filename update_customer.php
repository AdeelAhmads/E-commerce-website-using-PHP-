<?php
 $name=$_POST['cus_name'];
 $email=$_POST['cus_email'];
 $phone=$_POST['cus_phone'];
 $address=$_POST['cus_address'];
 $pass=$_POST['cus_password'];

 echo "password: " . $pass;
 $id=$_POST['co_id'];
include "connect.php";
 $q="UPDATE customer set password1='$pass',name='$name',email='$email',phone='$phone',address='$address' WHERE cus_id='$id'";
 if($conn->query($q)){
  header("Location:display_customer.php");

 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>