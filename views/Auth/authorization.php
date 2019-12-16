<?php

if(isset($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    AuthorizationController::login($login, $password);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="password" placeholder="password">
        <input type="submit">
    </form>
    <a href="/">Main page</a>
</body>
</html>
<?php

