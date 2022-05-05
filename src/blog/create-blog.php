<?php

include_once("header.php");

$title=$_POST['title'];
$categoria=$_POST['categoria'];
$content=$_POST['content'];
$username=$_SESSION['username'];

$insertOne = $collection->insertOne([
    'creator' => $username,
    'title' => $title,
    'categoria' => $categoria,
    'content' => $content

]);

header('blog.php');

?>

