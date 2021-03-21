<?php

require("../db_connect.php");

if (isset($_POST['limit'])) {
    $_SESSION['limit'] = $_POST['limit'];
} else if (!isset($_SESSION['limit'])) {
    $_SESSION['limit'] = 5;
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
        echo "Error: " . $query . "<br>" . $db->error;
        echo "<br>Note: this error message should only display during development, and should be removed";
        return 0;
    }
}

function updateQuery($query)
{
    $db = db_connect();
    // $result = mysqli_query($db, $query);
    if ($db->query($query) === TRUE) {
        header("Location: site.php");
    } else {
        echo "Error updating record: " . $db->error;
    }
}

function deleteQuery($query)
{
    $db = db_connect();
    if ($db->query($query) === TRUE) {
        header("Location: site.php");
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
}
