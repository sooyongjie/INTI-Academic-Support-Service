<?php

require("../../db_connect.php");
require('./func.php');

uploadPayment($_POST['reqID'], $_POST['token']);

function uploadPayment($reqID, $token)
{
    echo $reqID . " " . $token;
    $query = "UPDATE `payment` SET `token`= '$token' WHERE `reqID` = $reqID";
    $result = updateQuery($query);
    $header = "Location: ../request-view.php?id=" . $reqID;
    if ($result) header($header);
}
