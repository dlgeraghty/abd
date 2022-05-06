<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$document = $collection->users->findOne(['name'=>$username]);
if($document['password'] === $password){
    //echoing is a problem if we want to redirect after
    //echo "login correct";
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
}

header("Location: ../users.php");

?>