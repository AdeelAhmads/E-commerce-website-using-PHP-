<?php 
$name=$_POST['f_name'];
$description=$_POST['f_description'];
include 'connect.php';
$q="insert into febric(name,description) values('$name','$description')";
if($conn->query($q)){
    header("Location:display_febric.php");

}
?>