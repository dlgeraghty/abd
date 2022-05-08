<?php

include_once(__DIR__."/../config.php");

$username = $_POST["username"];

$collection->user->deleteOne(["name"=>$username]);

header("users.php");

?>