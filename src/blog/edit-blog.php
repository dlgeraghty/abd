<?php

include_once(__DIR__.'/../header.php');
include_once(__DIR__.'/../config.php');
include_once(__DIR__.'/../nav.php');

$postTitle = $_POST['post-title'];

$document = $collection->UserPosts->findOne(['title' => $postTitle]);
$title = $document['title'];
$content = $document['content'];
$categoria = $document['categoria'];

echo "<h1> Editar post ".$title."</h1>";

echo <<<GFG
    <form method="POST" action="edit-blog.php">
        <input type="hidden" name="title" value='$title'><br>
        <label for="categoria"> Categoria </label><br>
        <input type="text" name="categoria" value='$categoria'><br>
        <label for="content"> Content </label><br>
        <input type="textarea" name="content" value='$content'><br>
        <input type="submit" value="update" name="update">
    </form>
GFG;

if(isset($_POST['update'])) {
    $title=$_POST['title'];
    $categoria=$_POST['categoria'];
    $content=$_POST['content'];
    $collection->UserPosts->updateOne(
        ['title'=> $title],
        ['$set' => ['categoria'=>$categoria]]
    );
    $collection->UserPosts->updateOne(
        ['title'=> $title],
        ['$set' => ['content'=>$content]]
    );
}

?>