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
    <?php include "header.html"?>
    <?php include "nav.php";?>


    <?php 
      $sID=$_GET["ID"];
      include "connect.php";
      $q="SELECT name,price,description,cat_id,s_id,co_id,f_id,t_id,image  FROM product WHERE pro_id='$sID'";
      $rows=$conn->query($q);
      $row=$rows->fetch_assoc();
      $price=$row['price'];
      $name=$row["name"];
      $description=$row["description"];
      $cat_id=$row["cat_id"];
      $s_id=$row["s_id"];
      $co_id=$row["co_id"];
      $f_id=$row["f_id"];
      $t_id=$row["t_id"];
      $image=$row["image"];
      ?>
    <div id="content" style='height:auto;'>
      <form
        name="form1"
        style="width: 700px"
        action="update_product.php"
        method="post"
        enctype="multipart/form-data"
      >
        <h1>ADD NEW PRODUCT</h1>
        <fieldset>
          <input type="hidden" name='productID' value='<?php echo $sID; ?>'>
          <label for="prdt_title">PRODUCT TITLE:</label> <br />
          <input
            type="text"
            id="prdt_title"
            name="productTitle"
            value='<?php echo $name;?>'
            required
          /><br />
          <label for="description">DESCRIPTION:</label><br>
            <textarea name="productDescription"  class='text_area' id="" cols="30" rows="10"><?php echo $description;?></textarea><br>
          <label for="Price">PRODUCT PRICE:</label>
          <label for="category" style="margin-left: 220px"
            >PRODUCT CATEGORY:</label
          >
          <br />
          <input
            type="number"
            class="input_box"
            id="prdt_price"
            style="margin-right: 130px"
            name="productPrice"
            value='<?php echo $price;?>'
            required
          />
          <select
            name="productCategory"
            class="input_box"
            style="height: 40px"
            id="prdt_category"
            required
          >
          <option value="-1" selected>SELECT CATEGORY</option>

          <?php
          include 'connect.php';
          $q="SELECT cat_id,price FROM category";
          $rows=$conn->query($q);
          while($row =$rows->fetch_assoc()){
            if($cat_id==$row['cat_id']){
                echo "<option  value='".$row['cat_id']."' selected>".$row['price']."</option>";
            }
            else {
                echo "<option  value='".$row['cat_id']."'>".$row['price']."</option>";
            }
            
          }

          ?>
        </select>

          <label for="size" style="margin-right: 230px">PRODUCT SIZE:</label>
          <label for="color">PRODUCT COLOR:</label> <br />
          <select
            name="productSize"
            class="input_box"
            id="prdt_size"
            style="height: 40px; margin-right: 150px"
          >
          <option value="-1" selected>SELECT SIZE</option>

          <?php
          include 'connect.php';
          $q="SELECT s_id,name FROM size";
          $rows=$conn->query($q);

          while($row =$rows->fetch_assoc()){
            if($s_id==$row['s_id']){
                echo "<option selected value='".$row['s_id']."'>".$row['name']."</option>";

            }
            else{
                echo "<option value='".$row['s_id']."'>".$row['name']."</option>";
            }
          }

          ?>

        </select>

          <select
            name="productColor"
            id="prdt_color"
            class="input_box"
            style="height: 40px"
          >
          <option value="-1" selected>SELECT COLOR</option>s
          <?php
          include 'connect.php';
          $q="SELECT co_id,name FROM color";
          $rows=$conn->query($q);
          while($row =$rows->fetch_assoc()){
            if($co_id==$row['co_id']){
                echo "<option selected value='".$row['co_id']."'>".$row['name']."</option>";
            }
            else{
                echo "<option value='".$row['co_id']."'>".$row['name']."</option>";
            }
           
          }
          ?>
        </select>
         
          <br />
          <label for="febric" style="margin-right: 205px"
            >PRODUCT FEBRIC:</label
          >
          <label for="type">PRDUCT TYPE</label>
          <select
            name="productFebric"
            class="input_box"
            style="height: 40px; margin-right: 150px"
            id="prdt_febric"
          >
          <option value="-1" selected>SELECT FEBRIC</option>

           <?php
          include 'connect.php';
          $q="SELECT f_id,name FROM febric";
          $rows=$conn->query($q);
          while($row =$rows->fetch_assoc()){
            if($f_id==$row['f_id']){
                echo "<option selected value='".$row['f_id']."'>".$row['name']."</option>";
            }else{
                echo "<option value='".$row['f_id']."'>".$row['name']."</option>";
            }
          }

          ?></select>
          <select
            class="input_box"
            style="height: 40px"
            name="productType"
            id="prdt_type"
          >
          <option value="-1" selected>SELECT TYPE</option>
          <?php
          include 'connect.php';
          $q="SELECT t_id,name FROM type";
          $rows=$conn->query($q);
          while($row =$rows->fetch_assoc()){
            if($t_id==$row['t_id']){
                echo "<option selected value='".$row['t_id']."'>".$row['name']."</option>";
            }
            else{
                echo "<option value='".$row['t_id']."'>".$row['name']."</option>";
            }
          }

          ?>
        </select>
          <label for="Price">PRODUCT IMAGE:</label><br />
          <input type="file" id="prdt_img" name="productImage" required /><br><br>
          <label for="Price">OLD IMAGE:</label><br />
          <img width='50' heigth='50' style='margin-left:-3px' src="<?php echo $image ?>" alt="">
          <button class="button-3" type="submit" style='margin-left:200px'>UPDATE PRODUCT</button>
        </fieldset>
      </form>
    </div>
    <?php include "footer.html"?>
  </body>
</html>
