<?php

include_once(__DIR__."/header.php");
include_once(__DIR__."/config.php");

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

