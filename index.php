<?php
require_once 'db_connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Login:<input type="text" name="login"><br>
        Senha:<input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>