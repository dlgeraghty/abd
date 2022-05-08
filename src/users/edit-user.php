<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../nav.php");
include_once(__DIR__."/../config.php");

if($_SESSION['login'] ){
    $username = $_SESSION['username'];
    echo "<h1> edit user ".$username."</h1>";
echo <<<GFG
    <form method="POST" action="edit-user.php">
        <label for="password"> New Password </label><br>
        <input type="password" name="password">
        <input type="submit" value="update" name="update">
    </form>

GFG;
}

if(isset($_POST['update'])){
    $username = $_SESSION['username'];
    $newPassword = $_POST['password'];
    $collection->users->updateOne(
        ['name'=>$username],
        ['$set'=> ['password'=>$newPassword]]
    );
}
?>
