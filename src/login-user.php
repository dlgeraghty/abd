<?php

session_start();

include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$document = $collection->findOne(['name'=>$username]);
if($docuemt['password'] === $password){
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
}

?>