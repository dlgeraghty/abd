<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../config.php");

$cursor = $collection->UserPosts->find();

echo "<div class='container'>";
echo '<div class="row">';

foreach($cursor as $document){

echo '<div class="col-sm-6">';
    echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
            echo "<h5 class='card-title'>".$document['title']."</h5>";
            echo "<h6 class='card-subtitle mb-2 text-muted'>".$document['categoria']."</h6>";
            echo "<p class='card-text'>".$document['content']."</p>";
            if($_SESSION['login'] && $_SESSION['username'] == $document['creator']){
                echo "<form method='POST' action='blog/edit-blog.php'>";
                    echo "<input type='hidden' name='post-title' value='".$document['title']."'>";
                    echo "<button type='submit' class='btn btn-primary'>Editar</button>";
                echo "</form>";
            }
            echo "<a href='#' class='card-link'>".$document['creator']."</a>";
        echo '</div>';
    echo '</div>';
echo '</div>';
}

echo '</div>';
echo '</div>';
?>