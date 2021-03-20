<?php

require("../db_connect.php");

if(isset($_POST['limit'])) {
    $_SESSION['limit'] = $_POST['limit'];
}
else if(!isset($_SESSION['limit'])) {
    $_SESSION['limit'] = 5;
}

function select($column,$table,$condition){
	global $conn;
	$query="SELECT $column FROM $table $condition";
	//echo $query."<br>\n";
	$result = mysqli_query($conn, $query);
	if($result && mysqli_num_rows($result)>0){
		for ($i=0;$i<mysqli_num_rows($result);$i++){
			$row[$i] = mysqli_fetch_assoc($result);
		}
		return $row;
	}
	else{
		return false;
	}
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
