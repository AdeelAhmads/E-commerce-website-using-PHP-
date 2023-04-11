<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"  href="web_style.css" />
  </head>
  <style>
  </style>
  <body>
    <?php include "header.html" ?>
    <?php include "nav.php";?>

    <div id="content" style='heigth:auto;'>
      <form
        name="form1"
        style="width: 700px"
        action="update_color.php"
        method="post"
      >
      <?php 
      $sID=$_GET["ID"];
      include "connect.php";
      $q="SELECT name,description  FROM color WHERE co_id='$sID'";
      $rows=$conn->query($q);
      $row=$rows->fetch_assoc();
      $name=$row["name"];
      $description=$row["description"];
    //   echo "<b>$description</b>"
      ?>
        <h1>EDIT COLOR</h1>
        <table>
         <thead>
            <label for="name">NAME:</label><br/>
            <input type="text" class='input_box' name='co_name' value='<?php echo $name?>' ><br>
            <label for="description">DESCRIPTION:</label><br>
            <textarea name="co_description"  class='text_area' id="" cols="30" rows="10"><?php echo $description?></textarea>
            <input type="hidden" name='co_id' value='<?php echo $sID?>'>
            <input type="submit" value="UPDATE COLOR" class='button-3' style="margin-top:-10px;">
            </form>
         </thead>
        </table>
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
