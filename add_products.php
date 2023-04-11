<?php
// $product_image=$_POST['productImage'];
$title=$_POST['productTitle'];
$price=$_POST['productPrice'];
$category=$_POST['productCategory'];
$size=$_POST['productSize'];
$color=$_POST['productColor'];
$febric=$_POST['productFebric'];
 $description=htmlspecialchars($_POST['productDescription']);
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
$c=new mysqli('localhost','root',"",'myweb');
$q="insert into product(name,price,cat_id,s_id,co_id,f_id,image,description,t_id) values ('$title','$price','$category','$size','$color','$febric','$photo','$description','$ptype')"; 
if(move_uploaded_file($_FILES['productImage']['tmp_name'],$photo))
{
    echo 'uploaded img';
    if($c->query($q))
    {
    header("Location:display_products.php");
       
        
    }
    else
    echo 'table error';

}
else
    echo 'eror';
?>