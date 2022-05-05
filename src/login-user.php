<?php

include_once("header.php");
include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$document = $collection->findOne(['name'=>$username]);
if($document['password'] === $password){
    echo "login correct";
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
}

?>