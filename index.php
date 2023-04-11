<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert data</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <form  name='form1' action="add_customer.php" method="post">
        <h1>Create Account</h1>
        <fieldset>
          <label for="name">Name:</label>
          <input type="text" id="name" name="customer_name" required>
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="customer_email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
          <label for="phone">Phone:</label>
          <input type="tel" id="tel" name="customer_phone"  placeholder="+923xxxxxxxxx" pattern="[+92]{3}[3]{1}[0-9]{2}[0-9]{7}" required>
          <input type="hidden" id="code" name='customer_code'>
          <label for="password">Password:</label>
          <input type="password" id="password" name='customer_password' minlength="8" maxlenght='15'>
          <script>
            document.getElementById("code").value=Math.floor(Math.random()*(999-100+1)+100);
          </script>
          <label for="address">Address:<textarea  style="resize:none" name="customer_address" id="address" cols="30" rows="10"></textarea></label>
        </fieldset>
        <button type="submit">CREATE MY ACCOUNT</button>
        <!-- already an account?<a id='login' href="#">&nbsp; Login</a>
        <button ><a href="display.php" style="text-decoration:none; color:white;">DISPLAY DATA</a></button> -->
      </form>
    </body>
</html>