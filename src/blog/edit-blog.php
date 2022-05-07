<?php

include_once(__DIR__.'/../header.php');
include_once(__DIR__.'/../config.php');
include_once(__DIR__.'/../nav.php');

$postId = $_POST['post-id'];
echo $postId;

$document = $collection->UserPosts->findOne(['_id' => $postId]);
$title = $document['title'];

echo "<h1> Editar post ".$title."</h1>";

?>