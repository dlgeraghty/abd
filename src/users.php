<?php

echo "<h1> Create user </h1>";
echo <<<GFG
            <form method="POST" action="create-user.php">
                <label for="username"> Username </label><br>
                <input type="text" name="username"><br>
                <label for="age"> Age </label><br>
                <input type="number" name="age"><br>
                <input type="submit" value="Submit">
            </form>
GFG;

?>