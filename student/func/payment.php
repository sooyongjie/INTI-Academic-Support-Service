<?php

require("../../db_connect.php");
require('./func.php');

uploadPayment($_POST['reqID'], $_POST['token']);

function uploadPayment($reqID, $token)
{
    echo $reqID . " " . $token;
    // update payment record
    $query = "UPDATE `payment` SET `token`= '$token' WHERE `reqID` = $reqID";
    $result = updateQuery($query);
    // update payment ID in request record
    $query = "UPDATE `requests` SET `payID`= '$reqID' WHERE `reqID` = $reqID";
    $result = updateQuery($query);
    $header = "Location: ../request-view.php?id=" . $reqID;
    if ($result) header($header);
}
