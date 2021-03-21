<?php

session_start();

require("../../db_connect.php");
require("func.php");

$email = $_POST["email"];
$hash = md5($_POST["password"]);

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$hash'";

$user = selectQuery($query);
if ($user != 0) {

    $_SESSION['username'] = $user['username'];
    $_SESSION['uid'] = $user['uid'];
    header("Location: ../home.php");

    echo "username - " . $_SESSION['username'];
    echo "<br>uid - " . $_SESSION['uid'];
} else {
    echo "gg";
}

exit();
