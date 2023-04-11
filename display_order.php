<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"  href="web_style.css"/>
  </head>
  <style>
  </style>
  <body>
    <?php include "header.html" ?>
    <?php include "nav.php";?>

    <div id="content" style='height:auto;'>
      <form
        name="form1"
        style="width: 700px;"
        method="post"
      >
      <!-- <a href="customer_products_display.php" class='button-3'style="margin-left:300px;" >ADD NEW</a> -->
        <h1>ALL ORDERS </h1>
        <table>
         <thead>
          <tr><th style="text-align:center;">Or ID</th><th style="text-align:center;">Name</th><th style="text-align:center;">Phone</th><th style="text-align:center;">Amount</th><th style="text-align:center;">Discount</th><th style="text-align:center;">Date</th><th style="text-align:center;">Option</th></tr>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $q="SELECT or_id,name,phone,amount,discount,date FROM customer_order;";
          $rows=$conn->query($q);
          if ($rows->num_rows > 0){
            while($row =$rows->fetch_assoc()){
                echo "<tr><td><b>#or0".$row['or_id']."</b></td><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['amount']."</td><td>".$row['discount']."</td><td>".$row['date']."</td><td><a href='delete_order.php?ID=".$row['or_id']."'>Delete</a></td></td>";
                } 
          }
          
          ?>
         </thead>
        </table>

      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
