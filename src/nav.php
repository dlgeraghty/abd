<?php


echo <<<GFG
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="blog.php">Blog</a></li>
GFG;
  if ($_SESSION['login']){
    echo "<li> Welcome, ". $_SESSION['username'] . "</li>";
  }
echo "</ul>";

?>