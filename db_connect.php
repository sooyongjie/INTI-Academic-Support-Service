<?php

function db_connect()
{
    // $servername = "remotemysql.com";
    // $username = "RdAxHqzJBi";
    // $password = "xoDHLmGBaU";
    // $dbname = "RdAxHqzJBi";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inti-academic-support-services";

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($db->connect_error) {
        return 0;
    } else {
        return $db;
    }
}
