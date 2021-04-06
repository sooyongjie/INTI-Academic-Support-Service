<?php

// require("../db_connect.php");

function selectQuery($query)
{
    $db = db_connect();
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
        return 0;
    }
}

function updateQuery($query)
{
    $db = db_connect();
    // $result = mysqli_query($db, $query);
    if ($db->query($query) === TRUE) {
        return 1;
    } else {
        echo "Error updating record: " . $db->error;
        exit();
    }
}

function deleteQuery($query)
{
    $db = db_connect();
    if ($db->query($query) === TRUE) {
        return 1;
    } else {
        echo "Error updating record: " . $db->error;
    }
}

function insertQuery($query, $getLastID)
{
    $db = db_connect();
    if ($db->query($query) === TRUE) {
        if ($getLastID) {
            return $db->insert_id;
        } else return 1;
    } else {
        echo "Error updating record: " . $db->error;
    }
}
