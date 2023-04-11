<?php 
$price=$_POST['catg_price'];
$description=$_POST['catg_description'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";
$conn = new mysqli($servername, $username, $password, $dbname);
$q="insert into category(price,description) values('$price','$description')";
if($conn->query($q)){
    header("Location:display_category.php");

}
?>