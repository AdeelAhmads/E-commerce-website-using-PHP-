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
        style="width: 700px"
        method="post"
      >
      
        <h1>ALL SIZES <a href="size.php" class='button-3'style="margin-left:300px;" >ADD NEW</a> </h1>
        <table>
         <thead>
          <tr><th style="text-align:center;">SIZE</th><th colspan='2' style="text-align:center;">OPTION</th></tr>
          <?php
          include "connect.php";
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $q="SELECT name,s_id FROM size";
          $rows=$conn->query($q);
          if ($rows->num_rows > 0){
            while($row =$rows->fetch_assoc()){
                echo "<tr><td>".$row['name']."<td><a href='delete_size.php?ID=".$row['s_id']."'>Delete</a></td><td><a href='edit_size.php?ID=".$row['s_id']."'>Update</a></td>";
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
