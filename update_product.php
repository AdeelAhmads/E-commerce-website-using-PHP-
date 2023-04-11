<?php
 $sID=$_POST['productID'];
 $title=$_POST['productTitle'];
 $price=$_POST['productPrice'];
 $category=$_POST['productCategory'];
 $size=$_POST['productSize'];
 $color=$_POST['productColor'];
 $febric=$_POST['productFebric'];
 $ptype=$_POST['productType'];
 $filename=$_FILES['productImage']['name'];
$folder="productImages/";
$photo=$folder.basename($_FILES['productImage']['name']);
$file_size=$_FILES['productImage']['size'];
if($file_size>500000)
{
    echo 'file should be less than 5mb';
    die();
}
$type=pathinfo($photo,PATHINFO_EXTENSION);
$type=strtolower($type);
if($type !='jpg' && $type!= 'jpeg'&& $type!='png' && $type!='webp')
{
    echo 'invalid';
    die();
}  
include 'connect.php';
 $description=htmlspecialchars($_POST['productDescription']);
include "connect.php";
$q="UPDATE product set name='$title',price='$price',description='$description',cat_id='$category',s_id='$size',co_id='$color',f_id='$febric',t_id='$ptype',image='$photo'  WHERE pro_id='$sID'";
if(move_uploaded_file($_FILES['productImage']['tmp_name'],$photo))
{
    if($conn->query($q))
    {
        header("Location:display_products.php");
    }
    else
    echo 'table error';

}
else
    echo 'eror';
?>