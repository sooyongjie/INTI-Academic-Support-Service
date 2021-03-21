<?php

session_start();

require("../../db_connect.php");
require("func.php");

$email = $_POST["email"];
$hash = md5($_POST["password"]);

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$hash' AND type = 2";

$user = selectQuery($query);
if ($user != 0) {

    $_SESSION['user']['username'] = $user['username'];
    $_SESSION['user']['uid'] = $user['uid'];
    header("Location: ../requests.php");


    echo "username - " . $_SESSION['user']['username'];
    echo "<br>uid - " . $_SESSION['user']['uid'];
} else {
    header("Location: ../index.php");
}

exit();
