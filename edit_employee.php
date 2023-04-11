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

    <div id="content" style='height:auto;'>
      <form
        name="form1"
        style="width: 700px;"

        action="update_employee.php"
        method="post"
      >
      <?php 
      $sID=$_GET["ID"];
      include "connect.php";
      $q="SELECT name FROM employee WHERE em_id='$sID'";
      $rows=$conn->query($q);
      $row=$rows->fetch_assoc();
      $name=$row["name"];
      ?>
        <h1>EDIT COLOR</h1>
        <table>
         <thead>
            <label for="name">NAME:</label><br/>
            <input type="text" class='input_box' name='em_name' value='<?php echo $name?>' ><br>
            <input type="hidden" name='em_id' value='<?php echo $sID?>'>
            <input type="submit" value="UPDATE CUSTOMER" class='button-3' style="margin-top:-10px;">
            </form>
         </thead>
        </table>
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
