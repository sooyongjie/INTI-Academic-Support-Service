<?php

require("../../db_connect.php");

function getUser($email, $hash)
{
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$hash'";

    $db = db_connect();
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
        return 0;
    }
}


session_start();

$email = $_POST["email"];
$hash = md5($_POST["password"]);

$user = getUser($email, $hash);
if ($user != 0) {

    $_SESSION['username'] = $user['username'];
    $_SESSION['uid'] = $user['uid'];
    header("Location: ../home.php");

    echo "username - ".$_SESSION['username'];
    echo "<br>uid - ".$_SESSION['uid'];
} else {
    echo "gg";
}

exit();
