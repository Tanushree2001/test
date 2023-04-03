<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style/style_login.css">
</head>
<body>
  <!-- div created to have max width  -->
  <div class="container">

  <!-- form created in which left side is image and in right side input fields are created  -->
  <div class="login_form">
    <!-- left side in form containing image so div is created  -->
    <div class="left-side">
      <img src="log.webp" alt="none" class="image">
    </div>
    <!-- right side contains input fields so the main form started from here  -->
    <div class="right-side">
      <form action="../controllers/login.php" method="post">
        <!-- at top of form two options are available for login and signup  -->
        <div class="log-opt">
          <div class="active"><a href="#">Login</a></div>
          <div><a href="signin.php">Sign Up</a></div>
        </div>
        <!-- input field for email and password  -->
        <label for="email">Email: </label><br>
        <!-- <input type="email" name="email" required pattern="/^[^\s@]+@[^\s@]+\.[^\s@]+$/"><br> -->
 
        <input type="email" name="email" required ><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br>

        <!-- anchor tag is created for forgot password option  -->
        <!-- <a href="#">Forgot password</a><br> -->
        <!-- login button created  -->
        <button>login</button>
      </form>
    </div>
  </div>
  <!-- A seperate div container is created for logo  -->
  <!-- <div class="logo">
    <h2>linked</h2>
  </div> -->
  </div>
</body>
</html>