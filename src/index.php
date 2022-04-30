<?php

require_once __DIR__ . '/vendor/autoload.php';

$db = new MongoDB\Client("mongodb://mongodb:27017");

$collection = $db->blog->users;

$cursor = $collection->find();

foreach ($cursor as $document) {
    printf("%s<br>", $document['name']);
}

?>
