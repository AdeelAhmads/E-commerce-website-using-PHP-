<?php 
$name=$_POST['co_name'];
$description=$_POST['co_description'];
include 'connect.php';
$q="insert into color(name,description) values('$name','$description')";
if($conn->query($q)){
    header("Location:display_color.php");

}
?>