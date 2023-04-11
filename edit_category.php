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
        style="width: 700px"
        action="update_category.php"
        method="post"
      >
      <?php 
      $catID=$_GET["ID"];
      include "connect.php";
      $q="SELECT price,description  FROM category WHERE cat_id='$catID'";
      $rows=$conn->query($q);
      $row=$rows->fetch_assoc();
      $price=$row["price"];
      $description=$row["description"];
    //   echo "<b>$description</b>"
      ?>
        <h1>EDIT CATEGORY</h1>
        <table>
         <thead>
            <label for="price">PRICE:</label><br/>
            <input type="number" class='input_box' value='<?php echo $price?>' name='catg_price'><br>
            <label for="description">DESCRIPTION:</label><br>
            <textarea name="catg_description"  class='text_area' id="" cols="30" rows="10"><?php echo $description?></textarea>
            <input type="hidden" name='catg_id' value='<?php echo $catID?>'>
            <input type="submit" value="UPDATE CATEGORY" class='button-3' style="margin-top:-10px;">
            </form>
         </thead>
        </table>
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
