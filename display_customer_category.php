<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        #product{
            width:98%;
            height:auto;
            float:left;
            /* display:flex; */
            /* justify-content:center; */
            /* align-content:flex-start; */

            
        }
        .item {
            float:left;
            /* border: 1px solid red; */
            width: 240px;
            height: 300px;
            margin:30px;
            display:flex;
            justify-content:center;
        }
        .item_image{
            /* border: 1px solid red; */
            width: 220px;
            height: 250px;
            margin:10px;

        }
        .name{
           
            color:black;
            font-weight:bold;
            margin-left:20px

        }
        .price{
            color:black;
            font-weight:bold;
            margin-left:50px
        }

        a{
            text-decoration: none;
        }
    </style>
</head>


<body>
<?php include "cart_included_header.php" ?>

<section id='product' style='height:auto;'>

<?php
 include "connect.php";
 $cat_id=$_GET['cat_id'];
 $q="SELECT pro_id,name,price,image FROM product WHERE cat_id = $cat_id";
   $rows=$conn->query($q);
   $count=0;
   while($row=$rows->fetch_assoc()){
     $count++;
     echo "<div class='item'><a  href='product_detail.php?ID=".$row['pro_id']."'><img class='item_image' src='".$row['image'].
     "'><br/>"."<span class='name'>".$row['name']."<br></span><span class='price' >   Rs.".$row['price'] ."</span></a></div>";
   
   }
  
   echo "<div class='item'><a href='product.php' class='button-3'>Add Product</a></div>";
   ?>


<?php echo "</section>"?>

<?php include "footer.html";?>
</body>
</html>

