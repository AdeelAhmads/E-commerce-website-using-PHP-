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
    <?php include "nav.php";?>


    <div id="content" style='height:auto;'>
      <form
        name="form1"
        style="width:95%"
        method="post"
      >
      
        <h1>ALL PRODUCT<a href="product.php" class='button-3'style="margin-left:350px;" >ADD NEW</a> </h1>
        <table style=''>
         <tdead>
          <tr><th style="text-align:center;">Pro ID</th><th style="text-align:center;">Title</th><th  style="text-align:center;">Price</th><th  style="text-align:center;">Description</th><th  style="text-align:center;">Category ID</th><th  style="text-align:center;">Size ID</th> <th  style="text-align:center;">Febric ID</th><th  style="text-align:center;">Color ID</th><th  style="text-align:center;">Type ID</th><th  style="text-align:center;">Image</th><th colspan='2' style="text-align:center;">Option</th></tr>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $q="SELECT pro_id,name,price,description,image,cat_id,s_id,f_id,co_id,t_id FROM product";
          $rows=$conn->query($q);
          if ($rows->num_rows > 0){
            while($row =$rows->fetch_assoc()){
                echo "<tr>
                <td ><b>#pro0" .$row['pro_id']. "<b></td>
                <td>".$row['name']."</td>
                <td>".$row['price']."</td>
                <td>".$row['description']."</td>
                <td>".$row['cat_id']."</td>
                <td>".$row['s_id']."</td>
                <td>".$row['f_id']."</td>
                <td>".$row['co_id']."</td>
                <td>".$row['t_id']."</td>
                <td><img heigth='50' width='50' src='".$row['image']."'>"."</td>
                <td><a href='delete_product.php?ID=".$row['pro_id']."'>Delete</a></td>
                <td><a href='edit_product.php?ID=".$row['pro_id']."'>Update</a></td>
              </tr>";
                // echo "<tr><td>".$row['pro_id']."</td><td>".$row['name']."</td><td>Rs.".$row['price']."</td><td>".$row['description']."</td><td><img heigtd='50' widtd='50' src='".$row['image']."'>"."</td><td><a href='delete_product.php?ID=".$row['pro_id']."'>Delete</a></td><td><a href='edit_product.php?ID=".$row['pro_id']."'>Update</a></td>";
                } 
          }
          
          ?>
         </tdead>
        </table>

      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
