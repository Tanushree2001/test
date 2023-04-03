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
  <!-- container created for the max-width  -->
  <div class="container">
    <!-- box containing the signup form  -->
    <div class="signup_form">
      <!-- left side of signup form  -->
      <div class="left-side">
        <img src="log.webp" alt="none" class="image">
      </div>

      <!-- right side of signup form  -->
      <div class="right-side">
        <!-- form started  -->
        <form action="../controllers/action_signup.php" method="POST">
          <label for="firstname">First Name: </label><br>
          <input type="text" name="firstname" required pattern="[A-Za-z]*"><br>
          <label for="lastname">Last Name: </label><br>
          <input type="text" name="lastname" required pattern="[A-Za-z]*"><br>
          <label for="email">Email: </label><br>
          <!-- <input type="text" name="email" required pattern="/^[^\s@]+@[^\s@]+\.[^\s@]+$/"><br> -->
          <input type="text" name="email" required><br>
          <label for="password">Password: </label><br>
          <input type="text" name="password" required><br>
          <button>Sign Up</button>
        </form>
        <!-- form end  -->
      </div>
    </div>
    <!-- logo in the page  -->
    <!-- <div class="logo">
      <h2>linked</h2>
    </div> -->
  </div>   
</body>
</html>