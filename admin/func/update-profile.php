<?php

session_start();

require("../../db_connect.php");
require("func.php");

$username = $_POST["username"];
$old = md5($_POST["curpass"]);
$new = md5($_POST["newpass"]);
$newcon = md5($_POST["conpass"]);

if($newcon != $new)
{
    header("Location: ../profile.php");
    exit();
    //New password doesn't match confirmed password
}

$slc_query = "SELECT * FROM user WHERE username = '$username' AND password = '$old' ";
$user = selectQuery($slc_query);

$upd_query = "UPDATE user SET password = '$new' WHERE password = '$old' ";

if($user>0){
    updateQuery($upd_query);
    header("Location: ./logout.php");
}
else{
    header("Location: ../profile.php");
}

exit();