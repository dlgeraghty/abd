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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title> ABD PROJECT </title>
  </head>
<body>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Proyecto ABD J.David</a>
  <div class="collapse navbar-collapse">
    <a class="nav-item" href="index.php">Home</a>
    <a class="nav-item" href="users.php">Users</a>
    <a class="nav-item" href="blog.php">Blog</a>
GFG;
  if ($_SESSION['login']){
    echo "<a class='nav-item'> Welcome, ". $_SESSION['username'] . "</a>";
  }
echo <<<GFG
  </div>
</nav>
GFG;


?>