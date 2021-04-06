<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Cookie js -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>


</html>

<?php
session_start();

include_once('./func/func.php');
include_once('../../db_connect.php');

// echo $_POST['username'] . $_POST['password'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$email = $_POST['email'];

$result = checkExistingUser($username);

if (!$result) {
    $code = generateVerficationLink();
    $result = insertUser(
        $username,
        $password,
        $fullname,
        $email,
        $code
    );
    if (!$result) {
        echo "WHAT";
        exit();
    }
} else {
    $_SESSION['error'] = "Username";
}

header("Location: ../index.php");

function checkExistingUser($username)
{
    $query = "SELECT * FROM user WHERE `username` = '$username'";

    $result = selectQuery($query);

    if (!$result) return 0;
    else return 1;
}

function insertUser(
    $username,
    $password,
    $fullname,
    $email,
    $code
) {
    $query = "INSERT INTO `user`(`type`, `username`, `fullname`, `email`, `password`, `code`) 
    VALUES (1, '$username', '$fullname', '$email', '$password', '$code')";
    $result = insertQuery($query, 0);
    if ($result) return 1;
    else return 0;
}

function generateVerficationLink()
{
    $code = md5($_POST['username'] . time());
    $link = "http://localhost/INTI-Academic-Support-Service/student/?verification=" . $code;
    $_SESSION['verification'] = $link;
    return $code;
}
