<?php

session_start();
//var_dump($_SESSION['loggedIn']);
    if ($_SESSION['loggedIn'] == 1) {
        header('Location: account.php');
    }

?>

<!DOCTYPE html>
<html lang = en>
<body>
<h1>Login Page</h1>
    <form method="POST" action="account.php">
        <div>
            <h2>Username:</h2>
            <input type="text" name="Username">
        </div>
        <div>
            <h2>Password:</h2>
            <input type="password" name="Password">
        </div>
        <div>
            <p><br></p>
            <input type="submit" value="Log DaFuq In">
        </div>
    </form>
</body>
</html>