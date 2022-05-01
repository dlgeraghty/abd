<?php

include_once("config.php");

$cursor = $collection->find();

echo <<<GFG
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthdate</th>
            <th>password</th>
        </tr>
GFG;

foreach($cursor as $docuemnt){
    echo "<tr>";
    echo "<td>". $document['_id'], "</td>";
    echo "<td>". $document['name'], "</td>";
    echo "<td>". $document['birthdate'], "</td>";
    echo "<td>". $document['password'], "</td>";
    echo "</tr>";
}

echo "</table>";

?>