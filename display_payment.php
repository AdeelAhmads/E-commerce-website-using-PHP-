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
  <header>
  <span><img src="productImages/logo.png" alt="" /> </span>
  <h1>My Market</h1>
 
  >
</header>

    <div id="content" style="width:100%; height:auto;">
      <form
        name="form1"
        style="width:95%;height:auto;"
        action="add_order.php"
        method="post"
      >
        
        <h1 style='text-align:center;'>PAYMENT</h1>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $price=$_GET["price"];
          $discount_price=(int)($price)*20/100
          ?>
          <label for="Name">Enter your name:</label><br/>
            <input type="text" class='input_box' name='cstmr_name'required><br>
            <label for="Name">Phone:</label><br/>
            <input type="tel" class='input_box' name='cstmr_phone' required><br>
            <label for="Name">Email:</label><br/>
            <input type="email" class='input_box' name='cstmr_email'required><br>
            <label for="description">Address:</label><br>
            <textarea name="cstmr_address" class='text_area' id="" cols="30" rows="10" required></textarea><br>
            <label for="Name">Actual Amount<br/>
            <input type="text" readonly value='<?php echo $price;?>' class='input_box' name='price' required><br>
            <label for="Name">Discount Amount<br/>
            <input type="text" readonly value='<?php echo $discount_price;?>' class='input_box' name='discount_price' required><br>
            <label for="Name">Date<br/>
            <input type="text" readonly value='<?php echo date("Y-m-d");?>' class='input_box'  name='date' required><br>
            <input type="submit" class='button-3'  value='PAY'>
           
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
