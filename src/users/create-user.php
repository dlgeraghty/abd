<?php

include_once(__DIR__."/../config.php");

$username = $_POST["username"];
$birthdate = $_POST["birthdate"];
$password = $_POST["password"];
$currentDate = date("Y-m-d h:i:sa");

$insertOne = $collection->users->insertOne([
    'name' => $username,
    'password' => $password,
    'numberOfPosts' => 0,
    'birthdate' => $birthdate,
    'joiningDate' => $currentDate

]);

header('Location: ../users.php');


?>