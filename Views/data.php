<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" ../style/style_post.css">
</head>
<body>
<!-- navigation bar  -->
<nav>
  <!-- container class to create maxwidth -->
  <div class="container">
  <!-- for giving logo at left side -->
  <div><h2>Cards</h2></div>
  <!-- options for the right side of nav bar  -->
  <div class="right-side">
    <li><a href="../controllers/cont_data.php">Post</a></li>
    <li><a href="../controllers/cont_personal.php">Personal Post</a></li>
    <li><a href="../Views/details.php">Detail Form</a></li>
  </div>
  </div>
</nav>

<div class="container-2">
    <?php
    /**
     * Loop through every post and display it in a different card.
     * 
     * @var array $userpost is an array containing the firstname, lastname, textarea and imagedata of user.
     */
     foreach($postContent as $show_post): ?>
      <div class="card">
        <div class="card-head">
        <p><?php echo $show_post['FirstName']." ". $show_post['LastName'];?></p>
        </div>
        <div class= "card-text">
        <p><?php echo $show_post['Title']; ?></p>
        <p><?php echo $show_post['Content']; ?></p>
        </div>
        <p><?php echo $show_post['timestamp']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>    
</body>
</html>