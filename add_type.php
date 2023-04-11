<?php 
$name=$_POST['t_name'];
$description=$_POST['t_description'];

include 'connect.php';
$q="insert into type(name,description) values('$name','$description')";
if($conn->query($q)){
    header("Location:display_type.php");
}
?>