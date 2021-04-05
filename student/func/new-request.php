<?php

function requestForm()
{
?>
    <div class="card form section">
        <div class="heading">
            <h2>Request Form</h2>
        </div>

        <label for="programme">Programme</label>
        <input class="chosen-value prog-id" type="hidden" value="10001">
        <input class="chosen-value prog-input" type="text" value="University of Wollongong" placeholder="Search programme">
        <ul class="value-list prog-list">
            <input class="value prog-value" value="Swinburne University" id="10002" readonly />
            <input class="value prog-value" value="University Coventry" id="10003" readonly />
            <input class="value prog-value" value="University of Wollongong" id="10001" readonly />
        </ul>
        <label for="session">Session</label>
        <input class="chosen-value sess-id" type="hidden" value="10001">
        <input class="chosen-value sess-input" type="text" value="July 2019" placeholder="Search session">
        <ul class="value-list sess-list">
            <input class="value sess-value" value="July 2019" id="10001" readonly />
            <input class="value sess-value" value="Feb 2020" id="10001" readonly />
            <input class="value sess-value" value="July 2020" id="10001" readonly />
            <input class="value sess-value" value="Feb 2021" id="10001" readonly />
            <input class="value sess-value" value="July 2021" id="10001" readonly />
        </ul>
        <label for="course-code">Course</label>
        <input class="chosen-value sub-id" type="hidden" value="10001">
        <input class="chosen-value sub-input" type="text" value="CSIT321 Project" placeholder="Search course">
        <ul class="value-list sub-list">
            <input class="value sub-value" value="CSIT321 Project" id="CSIT321" readonly />
            <input class="value sub-value" value="ISIT315 Semantic Web" id="ISIT315" readonly />
        </ul>
    </div>

    <div class="button-row section">
        <button class="add-btn active" onclick="getSubject()">
            <i class="fas fa-plus"></i>
            <span>Add</span>
        </button>
        <button class="done-btn" onclick="submitForm()">
            <div class="count-div">
                <span class="count-text"></span>
            </div>
            <span>Next</span>
        </button>
    </div>
<?php
}

function submitRequest()
{
    include_once('../db_connect.php');
    include_once('func.php');

    $keys = array_keys($_GET);
    $size = sizeof($_GET);

    $uniIndex = 0;
    $sessIndex = 2;
    $subIndex = 4;
    $subCount = $size / 6;

    // for submitting parent request
    $query = "INSERT INTO requests (subCount, `uid`)
    VALUES ($subCount, 10001)";
    $reqID = insertQuery($query, 1);

    for ($i = 0; $i < $subCount; $i++) {
        $progID = $_GET[$keys[0]];
        $sessID = $_GET[$keys[2]];
        $subID = $_GET[$keys[4]];
        $query = "INSERT INTO request_subjects (reqID, progID, sessID, subID)
        VALUES ($reqID, $progID, $sessID, '$subID')";
        $insert = insertQuery($query, 0);
        if ($insert) {
            $query = "INSERT INTO payment (amount, reqID) VALUES ($subCount, $reqID)";
            $insert = insertQuery($query, 0);
            if (!$insert) {
                exit("NANI");
            }
        } else exit("NANI");

        $subIndex = $subIndex + 6;
        $sessIndex = $sessIndex + 6;
        $uniIndex = $uniIndex + 6;
    }
    header("Location: ./requests.php");
}

?>