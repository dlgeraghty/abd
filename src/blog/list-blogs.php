<?php

include_once(__DIR__."/../header.php");
include_once(__DIR__."/../config.php");

$cursor = $collection->UserPosts->find();
echo <<<GFG
    <table>
        <tr>
            <th>id</th>
            <th>creator</th>
            <th>title</th>
            <th>categoria</th>
            <th>content</th>
            <th>fecha</th>
        </tr>
GFG;

foreach($cursor as $document){
    echo "<tr>";
    echo "<td>". $document['_id'] ."</td>";
    echo "<td>". $document['creator'] ."</td>";
    echo "<td>". $document['title'] ."</td>";
    echo "<td>". $document['categoria'] ."</td>";
    echo "<td>". $document['content'] ."</td>";
    echo "<td>". $document['date'] ."</td>";
    echo "</tr>";
}

echo "</table>"

?>