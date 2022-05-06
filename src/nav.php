<?php

echo <<<GFG
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> ABD PROJECT </title>
  </head>
<body>

<nav class="navbar navbar-dark">
<div class="container-fluid">
  <div class="navbar-header">
      <a class="navbar-brand" href="#">Proyecto ABD J.David</a>
  </div>
  <ul class="nav navbar-nav">
    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="users.php">Users</a></li>
    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
GFG;
  if ($_SESSION['login']){
    echo "<li class='nav-item'> Welcome, ". $_SESSION['username'] . "</li>";
  }
echo <<<GFG
    </ul>
  </div>
</nav>
GFG;


?>