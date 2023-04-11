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
      
        <h1>ALL EMPLOYEE<a href="employee.php" class='button-3'style="margin-left:350px;" >ADD NEW</a> </h1>
        <table style=''>
         <tdead>
          <tr><th style="text-align:center;">Em_ID</th><th style="text-align:center;">Name</th><th colspan='2' style="text-align:center;">Option</th></tr>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $q="SELECT em_id,name FROM employee";
          $rows=$conn->query($q);
          if ($rows->num_rows > 0){
            while($row =$rows->fetch_assoc()){
                echo "<tr>
                <td ><b>#em0" .$row['em_id']. "<b></td>
                <td>".$row['name']."</td>
                <td><a href='delete_employee.php?ID=".$row['em_id']."'>Delete</a></td>
                <td><a href='edit_employee.php?ID=".$row['em_id']."'>Update</a></td>
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
