<?php

include_once(__DIR__."/../config.php");

session_unset();
session_destroy();
header('Location: users.php');

?>