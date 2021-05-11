<?php

require_once('./func.php');
require("../../db_connect.php");


if (isset($_GET['approve'])) updateStatus($_GET['approve'], 2);
else if (isset($_GET['cancel'])) updateStatus($_GET['cancel'], 0);

function updateStatus($id, $status)
{   
    $query = "UPDATE `requests` SET `status` = $status WHERE `reqID` = $id ";
    $result = updateQuery($query);
    $header = "Location: ../requests.php?id=" . $id;
    if ($result) header($header);

}
