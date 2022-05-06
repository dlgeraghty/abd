<?php

include_once(__DIR__."/../header.php");

session_unset();
session_destroy();
header('Location: users.php');

?>