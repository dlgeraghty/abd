<?php

include_once("config.php");

$username = $_POST["username"];
$birthdate = $_POST["birthdate"];
$password = $_POST["password"];

$insertOne = $collection->insertOne([
    'name' => $username,
    'password' => $password,
    'numberOfPosts' => 0,
    'birthdate' => $birthdate,
    'joiningDate' => new Date()

]);


?>