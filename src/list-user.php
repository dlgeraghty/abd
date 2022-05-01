<?php

include_once("config.php");

$cursor = $collection->find();

echo <<<GFG
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>number of posts</th>
            <th>birthdate</th>
            <th>password</th>
            <th>joining date</th>
        </tr>
GFG;

foreach($cursor as $docuemnt){
    echo "<tr>";
    echo "<td>". $document['_id']. "</td>";
    echo "<td>". $document['name']. "</td>";
    echo "<td>". $document['numberOfPosts']."</td>";
    echo "<td>". $document['birthdate']. "</td>";
    echo "<td>". $document['password']. "</td>";
    echo "<td>". $document['joiningDate']. "</td>";
    echo "</tr>";
}

echo "</table>";

?>