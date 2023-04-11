<?php
     include "connect.php";
     $pro_id=$_GET['ID'];
     $q="SELECT pro_id,name,price,image,description FROM product WHERE pro_id='$pro_id'";

       $rows=$conn->query($q);
       $row=$rows->fetch_assoc();
       $name=$row['name'];
       $price=$row['price'];
    $q2="INSERT INTO cart(name,cost) VALUES('$name','$price')";
    if($conn->query($q2)){
        header('Location:customer_products_display.php');
    }
        //      echo "<div class='item'><a  href='product_detail.php?ID=".$row['pro_id']."'><img class='item_image' src='".$row['image'].
        //  "'><br/>"."<span class='name'>".$row['name']."<br></span><span class='price' >   Rs.".$row['price'] ."</span></span><br><span class='description' >".$row['description'] ."</span></a></div>";
        
?>