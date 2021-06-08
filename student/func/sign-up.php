<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Cookie js -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
</head>


</html>

<?php
session_start();

include_once('./func.php');
include_once('../../db_connect.php');

// echo $_POST['username'] . $_POST['password'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$email = $_POST['email'];

$result = checkExistingUser($email, $username);

if ($result) {
    $code = generateVerficationLink($email);
    $result = insertUser(
        $username,
        $password,
        $fullname,
        $email,
        $code
    );
    if (!$result) {
        echo "Whoops! Something went horribly wrong.";
        exit();
    }
}

header("Location: ../index.php");

function checkExistingUser($email, $username)
{
    $query = "SELECT uid FROM user WHERE `username` = '$username' AND `type` = 1";

    $result = selectQuery($query);
    if (!$result) {
        $query = "SELECT uid FROM user WHERE `email` = '$email' AND `type` = 1";

        $result = selectQuery($query);
        if (!$result) {
            return 1;
        } else {
            $_SESSION['msg'] = "The email has been used";
            return 0;
        }
    } else {
        $_SESSION['msg'] = "The username has been taken";
        return 0;
    }
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

function generateVerficationLink($email)
{
    $code = md5($_POST['username'] . time());
    $link = "http://localhost/INTI-Academic-Support-Service/student/?verification=" . $code;
    $_SESSION['verification'] = $link;
    $_SESSION['email'] = $email;
    return $code;
}
