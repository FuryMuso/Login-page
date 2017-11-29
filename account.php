<?php

//var_dump($_GET);

/**
 * variables declared as $username & $password
 *
 * @param $username
 * @param $password
 *
 * return as 'dan' and 'hi'
 */

$userThing = $_POST["Username"];
$passThing = $_POST["Password"];

session_start();

function loginChecking($userThing, $passThing) {

    $username = 'dan';
    $password = 'hi';

    if ($_SESSION['loggedIn'] !== 1) {
        if ($username !== $userThing || $password !== $passThing) {
            header('Location: login.php');
        } else {
            $_SESSION['loggedIn'] = 1;
        }
    }
}

loginChecking($userThing, $passThing);

?>

<!DOCTYPE html>
<html lang = en>
    <body>
        <h1>Account Page</h1>
        <form method="POST" action="logout.php">
            <input type="submit" value="LogOooot">
        </form>
    </body>
</html>