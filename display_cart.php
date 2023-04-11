<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="web_style.css" />
  </head>
  <style>
  </style>
  <body>
    <?php include "header.html" ?>
    <div id="content" style="width:100%">
      <form
        name="form1"
        style="width:95%"
        method="post"
      >
      
        <h1 style='text-align:center;'>MY CART</h1>
        <table style='text-align:center;'>
         <thead>
          <tr><th style="text-align:center;">Product Name</th><th style="text-align:center;">Price</th><th  style="text-align:center;">Action</th></tr>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $q="SELECT cart_id,name,cost FROM cart";
          $rows=$conn->query($q);
          $total_cost=0;
          if ($rows->num_rows > 0){
            while($row =$rows->fetch_assoc()){
                $total_cost=$total_cost+(int)$row['cost'];;

                echo "<tr>
               
                <td><b>".$row['name']."</b></td>
                <td>".$row['cost']."</td>
                <td><a href='delete_cart.php?ID=".$row['cart_id']."'>Delete</a></td>
              </tr>";
                // echo "<tr><td>".$row['pro_id']."</td><td>".$row['name']."</td><td>Rs.".$row['price']."</td><td>".$row['description']."</td><td><img heigtd='50' widtd='50' src='".$row['image']."'>"."</td><td><a href='delete_product.php?ID=".$row['pro_id']."'>Delete</a></td><td><a href='edit_product.php?ID=".$row['pro_id']."'>Update</a></td>";
                } 
                echo "<td colspan='2' style='text-align:right;font-weight: bold;'>Total Amount</td><td>$total_cost</td>";
          }
              
          ?>
          
         </thead>

        </table>
            <a style='margin-top:5px' class='button-3'href="customer_products_display.php"><- Continue shoping</a>
            <a style='margin-top:5px; margin-left:850px' class='button-3'href="display_payment.php?price=<?php echo $total_cost;?>">proceed to checkout</a>

      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
