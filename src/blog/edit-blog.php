<?php

include_once(__DIR__.'/../header.php');
include_once(__DIR__.'/../config.php');
include_once(__DIR__.'/../nav.php');

$postTitle = $_POST['post-id'];

$document = $collection->UserPosts->findOne(['title' => $postTitle]);
$title = $document['title'];

echo "<h1> Editar post ".$title."</h1>";

?>