<?php

include_once("header.php");
include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$document = $collection->findOne(['name'=>$username]);
if($document['password'] === $password){
    //echoing is a problem if we want to redirect after
    //echo "login correct";
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
}

header("Location: users.php");

?>