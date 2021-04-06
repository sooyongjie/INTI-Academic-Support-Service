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
    $result = updateQuery($query);
    if ($result) {
        $_SESSION['msg'] = "Success";
        header("Location: index.php");
    } else {
        echo "WHAT";
        exit();
    }
}
