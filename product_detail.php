<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="web_style.css">
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
            width: 40%;
            height: 300px;
            margin:30px;
            display:flex;
            justify-content:center;
        }
        .item_image{
            /* border: 1px solid red; */
            width: 300px;
            height: 200px;
            margin:10px;

        }
        .name{
           
            color:black;
            font-weight:bold;
            /* margin-left:20px */

        }
        .price{
            color:black;
            font-weight:bold;
        }
        .description{
            color:black;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<section id='product' style='height:auto;'>
    <?php include "header.html";
    ?>
   
    <?php
     include "connect.php";
     $pro_id=$_GET['ID'];
     $q="SELECT pro_id,name,price,image,description FROM product WHERE pro_id='$pro_id'";
       $rows=$conn->query($q);
       $row=$rows->fetch_assoc();
         echo "<div class='item'><a  href='product_detail.php?ID=".$row['pro_id']."'><img class='item_image' src='".$row['image'].
         "'><br/>"."<span class='name'>".$row['name']."<br></span><span class='price' >   Rs.".$row['price'] ."</span></span><br><span class='description' >".$row['description'] ."</span></a></div>";
        
       ?>
      
      <a href='add_to_cart.php?ID=<?php echo $pro_id;?>' class='button-3' style='margin-top:280px'>add to cart</a>
    <?php echo "</section>"?>
    <?php include "footer.html";?>
</body>
</html>