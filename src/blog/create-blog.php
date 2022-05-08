<?php

include_once("../header.php");
include_once("../config.php");

$title=$_POST['title'];
$categoria=$_POST['categoria'];
$content=$_POST['content'];
$username=$_SESSION['username'];
$currentDate = date("Y-m-d h:i:sa");

$insertOne = $collection->UserPosts->insertOne([
    'creator' => $username,
    'title' => $title,
    'categoria' => $categoria,
    'content' => $content,
    'date' => $currentDate
]);

$updateNumberOfPosts = $collection->users->updateOne(
    ['name' => $username],
    ['$inc' => ['numberOfPosts':1]]
);

header('Location: ../blog.php');

?>

