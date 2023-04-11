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
    <div id="content">
      <form
        name="form1"
        style="width: 700px"
        action="add_color.php"
        method="post"
      >
        <h1>ADD COLOR</h1>
        <table>
         <thead>
            <label for="Name">Name:</label><br/>
            <input type="text" class='input_box' name='co_name'><br>
            <label for="description">DESCRIPTION:</label><br>
            <textarea name="co_description" class='text_area' id="" cols="30" rows="10"></textarea>
            </form>
            <input type="submit" class='button-3' style="margin-left:-320px; margin-top:20px;" value='SUBMIT'>

         </thead>
        </table>
      </form>
    </div>
   <?php include "footer.html"; ?>
  </body>
</html>
