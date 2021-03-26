<?php

session_start();

require("../../db_connect.php");
require("func.php");

$email = $_POST["email"];
$old = md5($_POST["curpass"]);
$new = md5($_POST["newpass"]);

$slc_query = "SELECT * FROM user WHERE email = '$email' AND password = '$old' ";
$user = selectQuery($slc_query);

$upd_query = "UPDATE user SET password = '$new' WHERE password = '$old' ";

if($user>0){
    updateQuery($upd_query);
    header("Location: ./logout.php");
}
else{
    header("Location: ../profile.php");
    //current password incorrect! Failed to change password!
}



exit();