<?php

include_once('func.php');
include_once('../db_connect.php');

function checkVerification($code)
{
    $query = "SELECT * FROM user WHERE `code` = '$code'";

    $result = selectQuery($query);

    if ($result) completeRegistration($code);
    else {
        echo "WHAT";
        exit();
    }
}

function completeRegistration($code)
{
    $query = "UPDATE `user` SET `code`= '' WHERE `code` = '$code'";
    updateQuery($query);
    $_SESSION['msg'] = "Your account has been verified.";
    header("Location: index.php");
}
