<?php

session_start();

require("../../db_connect.php");
require("func.php");

$email = $_POST["email"];
$hash = md5($_POST["password"]);

$query = "SELECT uid, username FROM user WHERE email = '$email' AND password = '$hash' ";

$user = selectQuery($query);

if ($user != 0) {
    $_SESSION['user']['username'] = $user[0]['username'];
    $_SESSION['user']['uid'] = $user[0]['uid'];

    header("Location: ../home.php");
} else {
    header("Location: ../index.php");
}

exit();
