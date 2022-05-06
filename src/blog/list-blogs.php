<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../config.php");

$cursor = $collection->UserPosts->find();
echo <<<GFG
<div class="card" style="width: 18rem;">
<div class="card-body">
GFG;

foreach($cursor as $document){
    echo "<h5 class='card-title'>".$document['title']."</h5>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>".$document['categoria']."</h6>";
    echo "<p class='card-text'>".$document['content']."</p>";
    if($_SESSION['login'] && $_SESSION['username'] == $document['creator']){
        echo "<a href='#' class='card-link'>edit</a>";
    }
    echo "<a href='#' class='card-link'>".$document['creator']."</a>";
}
echo <<<GFG
    </div>
</div>
GFG;

?>