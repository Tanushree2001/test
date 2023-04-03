<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<!-- navigation bar -->
<nav>
  <!-- container class to create maxwidth -->
  <div class="container">
  <!-- for giving logo at left side -->
  <div><h2>Card</h2></div>
  <!-- options for the right side of nav bar  -->
  <div class="right-side">
    <li><a href="../controllers/cont_data.php">Post</a></li>
    <li><a href="../controllers/cont_personal.php">Personal Post</a></li>
    <li><a href="../Views/details.php">Detail Form</a></li>
  </div>
  </div>
</nav>

<div class="container-2">
  <div class="card">
    <!-- form created which contains textarea and file upload field  -->
    <form action="../controllers/cont_details.php" method="POST" enctype="multipart/form-data">
      <h2>Add Note</h2>
      <label for="text">Title: </label><br>
      <input type="text" name="title" class="title" required><br>

      <label for="text">Content: </label><br>
      <textarea name="content" class="text" cols="55" rows="10" placeholder="Content"></textarea><br>

      <input type="submit" value="submit" class="submit">
    </form>
    <!-- form ends  -->
    </div>
    
</body>
</html>