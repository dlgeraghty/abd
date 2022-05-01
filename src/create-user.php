<?php

include_once("config.php");

$username = $_POST["username"];
$age = $_POST["age"];

$insertOne = $collection->insertOne([
    'name' => $username,
    'age' => $age
]);


?>