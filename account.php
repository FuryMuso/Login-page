<?php

var_dump($_GET);

$username = 'dan';
$password = 'hi';

session_start();

if ($_SESSION['loggedIn'] !== 1) {
    if ($username !== $_GET["Username"] || $password !== $_GET["Password"]) {
        header('Location: login.php');
    } else {
        $_SESSION['loggedIn'] = 1;
    }
}

?>

<!DOCTYPE html>
<html lang = en>
    <body>
        <h1>Account Page</h1>
    </body>
</html>