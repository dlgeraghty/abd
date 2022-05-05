<?php

include_once("header.php");
include_once("nav.php");

echo "<h1> List of blogs </h1>";
//listar los detalles de los diferentes blogs

if($_SESSION['login']){
    //si estas logueado, puedes crear blogs
echo <<<GFG
    <form method="POST" action="blog/create-blog.php">
        <label for="title"> Title </label><br>
        <input type="text" name="title"><br>
        <label for="categoria"> Categoria </label><br>
        <input type="text" name="categoria"><br>
        <label for="content"> Content </label><br>
        <input type="textarea" name="content"><br>
        <input type="submit" value="Submit">
    </form>
GFG;
}


?>