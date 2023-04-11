<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            /* border: 1px solid green; */
        }
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
 $q="SELECT pro_id,name,price,image FROM product";
   $rows=$conn->query($q);
   
   while($row=$rows->fetch_assoc()){
    
     echo "<div class='item'><a  href='product_detail.php?ID=".$row['pro_id']."'><img class='item_image' src='".$row['image'].
     "'><br/>"."<span class='name'>".$row['name']."<br></span><span class='price' >   Rs.".$row['price'] ."</span></a></div>";
   
   }
   echo "<div class='item'><a href='product.php' class='button-3' style='display:flex;justify-content:center;align-items:center;'><span>Add Product</span></a></div>";

   ?>


<?php echo "</section>"?>

<?php include "footer.html";?>
</body>
</html>

