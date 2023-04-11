<?php 
$name=$_POST['cstmr_name'];
$phone=$_POST['cstmr_phone'];
$address=$_POST['cstmr_address'];
$email=$_POST['cstmr_email'];
$price=$_POST['price'];
$discount_price=$_POST['discount_price'];
$date=$_POST['date'];
echo $name.$phone.$price.$discount_price.$date;
include 'connect.php';
$q="INSERT INTO customer_order(name,phone,amount,discount,date) VALUES('$name','$phone','$price','$discount_price','$date');";
if($conn->query($q)){
    header("Location:success.php");
}
?>