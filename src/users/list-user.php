<?php

include_once(__DIR__."/../config.php");

$cursor = $collection->users->find();

echo <<<GFG
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>number of posts</th>
            <th>birthdate</th>
            <th>password</th>
            <th>joining date</th>
            <th>edit</th>
        </tr>
GFG;
foreach($cursor as $document){
    echo "<tr>";
    echo "<td>". $document['_id']. "</td>";
    echo "<td>". $document['name']. "</td>";
    echo "<td>". $document['numberOfPosts']."</td>";
    echo "<td>". $document['birthdate']. "</td>";
    echo "<td>". $document['password']. "</td>";
    echo "<td>". $document['joiningDate']. "</td>";
    if($_SESSION['login'] && $_SESSION['username'] == $document['name']){
echo <<<GFG
        <td>
            <form method='POST' action='users/edit-user.php'>
                <button type='submit' class='btn btn-primary'>Editar</button>
            </form>
        </td>
GFG;
    }
    echo "</tr>";
}

echo "</table>";

?>