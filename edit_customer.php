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

        action="update_customer.php"
        method="post"
      >
      <?php 
      $sID=$_GET["ID"];
      include "connect.php";
      $q="SELECT name,password1,email,phone,address  FROM customer WHERE cus_id='$sID'";
      $rows=$conn->query($q);
      $row=$rows->fetch_assoc();
      $name=$row["name"];
      $password=$row["password1"];
      $email=$row["email"];
      $phone=$row["phone"];
      $address=$row["address"];
 echo "password".$password;

    //   echo "<b>$description</b>"
      ?>
        <h1>EDIT COLOR</h1>
        <table>
         <thead>
            <label for="name">NAME:</label><br/>
            <input type="text" class='input_box' name='cus_name' value='<?php echo $name?>' ><br>
            <label for="email">Email:</label><br/>
            <input type="email" class='input_box' name='cus_email' value='<?php echo $email?>' ><br>
            <label for="phone">Phone:</label><br>
            <input type="tel" class='input_box' name='cus_phone' value='<?php echo $phone?>' ><br>
            <label for="password">Password:</label><br>
            <input type="text" class='input_box' name='cus_password' value='<?php echo $password?>'><br>
            <label for="address">Address:</label><br>
            <textarea name="cus_address"  class='text_area' id="" cols="30" rows="10"><?php echo $address?></textarea>
            <input type="hidden" name='co_id' value='<?php echo $sID?>'>
            <input type="submit" value="UPDATE CUSTOMER" class='button-3' style="margin-top:-10px;">
            </form>
         </thead>
        </table>
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
