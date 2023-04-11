<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="web_style.css" />
    <style>
        #cat_link{
            width: 100%;
            height: 35px;
            background-color: #59caa0;
            padding: 5px;
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>

<?php include "header.html" ?>

  
   <?php
   include "connect.php";
   $q="SELECT cat_id, price FROM category";
   $rows=$conn->query($q);
   echo "<section  id='cat_link'><h3 style='color:white; margin-top:-0.01px;'>Categories:&nbsp;&nbsp;&nbsp;</h3><a class='button-3' href='customer_products_display.php'>All products</a>&nbsp;&nbsp;";
   
   while($row=$rows->fetch_assoc()){
     echo "<a class='button-3' href='display_customer_category.php?cat_id=".$row['cat_id']."'>".$row['price']. "</a> &nbsp;";
   }
   echo "</section>";
   ?>

</body>
</html>