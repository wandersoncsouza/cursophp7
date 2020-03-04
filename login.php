<?php

$servermane = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

    mysqli_connect($servermane, $username, $password, $db_name) or die(mysqli_connect_error());
?>