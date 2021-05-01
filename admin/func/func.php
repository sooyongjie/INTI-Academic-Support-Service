<?php

// check requests to show all at once
if (!isset($_SESSION['limit'])) $_SESSION['limit'] = 5;
else if (isset($_GET['entries'])) {
    $_SESSION['limit'] = $_GET['entries'];
}

// check requests to show all at once
if (!isset($_SESSION['page'])) {
    $_SESSION['page'] = 1;
    $_SESSION['offset'] = 0;
} else if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
    $_SESSION['offset'] = ($_SESSION['page'] - 1) * $_SESSION['limit'];
}

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
        echo "No records found.<br>";
        echo "Query: " . $query . "<br>" . $db->error;
        return 0;
    }
}

function updateQuery($query)
{
    $db = db_connect();
    // $result = mysqli_query($db, $query);
    if ($db->query($query) === TRUE) {
        return 1;
        // header("Location: site.php");
    } else {
        echo "Error updating record: " . $db->error;
        return 0;
    }
}

function deleteQuery($query)
{
    $db = db_connect();
    if ($db->query($query) === TRUE) {
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
}

function insertQuery($query, $getLastID)
{
    $db = db_connect();
    if ($db->query($query) === TRUE) {
        if ($getLastID) {
            return $db->insert_id;
        } else return 0;
    } else {
        echo "Error updating record: " . $db->error;
        die("die");
    }
}
