<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../nav.php");
include_once(__DIR__."/../config.php");

if($_SESSION['login'] ){
    $username = $_SESSION['username'];
    echo "<h1> edit user ".$username."</h1>";
}

?>
