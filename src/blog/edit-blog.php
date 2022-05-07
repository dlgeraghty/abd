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
        <label for="title"> Title </label><br>
        <input type="text" disabled name="title" value='$title'><br>
        <label for="categoria"> Categoria </label><br>
        <input type="text" name="categoria" value='$categoria'><br>
        <label for="content"> Content </label><br>
        <input type="textarea" name="content" value='$content'><br>
        <input type="submit" value="update" name="update">
    </form>
GFG;

if(isset($_POST['update'])) {
    echo 'TITULO: '. $_POST['title'] . '<br>';
    echo 'CATEGORIA' . $_POST['categoria'] . '<br>';
    echo 'CONTENT' . $_POST['content'] . '<br>';
    $collection->UserPosts->updateOne(
        ['title'=>$_POST['title']],
        ['$set' => ['categoria'=>$_POST['categoria']],['content'=>$_POST['content']]]
    );
}

?>