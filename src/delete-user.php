<?php

include_once("config.php");

$username = $_POST["username"];

$collection->deleteOne(["name"=>$username]);

header("users.php");

?>