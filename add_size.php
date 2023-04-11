<?php 
$name=$_POST['sz_name'];
$description=$_POST['sz_description'];

include 'connect.php';
$q="insert into size(name,description) values('$name','$description')";
if($conn->query($q)){
    header("Location:display_size.php");

}
?>