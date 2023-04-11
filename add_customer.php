<?php
 $name=trim($_POST['customer_name']);
 $email=trim($_POST['customer_email']);
 $phone=trim($_POST['customer_phone']);
 $address=trim($_POST['customer_address']); 
 $password=trim($_POST['customer_password']); 
 $code=$_POST['customer_code'];

 $conn=new mysqli("localhost","root","","myweb");
 $q="insert into customer(Name,Email,Phone,password1,address,code) values('$name','$email','$phone','$password','$address','$code')";
 if($conn->query($q)){
    header("Location:customer_products_display.php");
 } 
 else {
   echo "Error: " . $q . "<br>" . $conn->error;
 }
?>