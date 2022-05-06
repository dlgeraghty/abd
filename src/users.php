<?php

include_once("header.php");
include_once("nav.php");
include_once("config.php");

echo "<h1> Login </h1>";
echo <<<GFG
            <form method="POST" action="users/login-user.php">
                <label for="username"> Username </label><br>
                <input type="text" name="username"><br>
                <label for="password"> password </label><br>
                <input type="password" name="password"><br>
                <input type="submit" value="Submit">
            </form>
GFG;

echo "<h1> Create user </h1>";
echo <<<GFG
            <form method="POST" action="users/create-user.php">
                <label for="username"> Username </label><br>
                <input type="text" name="username"><br>
                <label for="birthdate"> birthdate </label><br>
                <input type="date" name="birthdate"><br>
                <label for="password"> password </label><br>
                <input type="password" name="password"><br>
                <input type="submit" value="Submit">
            </form>
GFG;

echo "<h1> update user </h1>";
echo <<<GFG
            <form method="POST" action="users/update-user.php">
                <label for="username"> Username </label><br>
                <input type="text" name="username"><br>
                <input type="submit" value="Update">
            </form>
GFG;

echo "<h1> delete user </h1>";
echo <<<GFG
            <form method="POST" action="users/delete-user.php">
                <label for="username"> Username </label><br>
                <input type="text" name="username"><br>
                <input type="submit" value="Delete">
            </form>
GFG;

echo "<h1> List users </h1>";
include_once("users/list-user.php");

?>