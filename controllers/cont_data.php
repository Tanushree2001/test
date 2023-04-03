<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 * 
 * @require_once ../models/modelactiondata.php This file contains the class Post.
 * 
 * @require_once ../views/data.php This file contains the HTML for all users Post.
 */
// require 'login_restri.php';
require_once('../models/modelactiondata.php');
$post = new Post();
/**
 * @return array An array for post.
 */
$postContent = $post->print_post_content();
require_once('../Views/data.php');
?>