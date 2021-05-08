<?php

if (isset($_GET['approve'])) updateStatus($_GET['approve'], 2);
else if (isset($_GET['cancel'])) updateStatus($_GET['cancel'], 0);

function updateStatus($id, $status)
{
    $query = "UPDATE `requests` SET `status` = $status WHERE `reqID` = $id ";
}
