<?php

include_once("header.php");
include_once("nav.php");

echo "<div class='container'>";
echo '<div class="row">';
    echo '<div class="col-sm-6">';
        echo "<h1> List of blogs </h1>";
        //listar los detalles de los diferentes blogs
        include_once("blog/list-blogs.php");

    echo '</div>';
    echo '<div class="col-sm-6">';
        if($_SESSION['login']){
            //si estas logueado, puedes crear blogs
            echo "<h1> Create a new blog </h1>";
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
    echo '</div>';
echo '</div>';
echo '</div>';

?>