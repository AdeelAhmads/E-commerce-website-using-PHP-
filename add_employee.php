<?php 
$name=$_POST['em_name'];
include 'connect.php';
$q="insert into employee(name) values('$name')";
if($conn->query($q)){
    header("Location:display_employee.php");

}
?>