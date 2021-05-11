<?php

require_once('./func/func.php');
require_once("../db_connect.php");

function getProgrammes()
{
    $query = "SELECT * FROM `programme`";
    $result = selectQuery($query);
    if ($result) {
        return $result;
    }
}

function getSessions()
{
    $query = "SELECT * FROM `session`";
    $result = selectQuery($query);
    if ($result) {
        return $result;
    }
}

function getSubjects()
{
    $query = "SELECT * FROM `subject`";
    $result = selectQuery($query);
    if ($result) {
        return $result;
    }
}

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
            <?php
            $progs = getProgrammes();
            foreach ($progs as $prog) {
            ?>
                <input class="value prog-value" value="<?php echo $prog['progName'] ?>" id="<?php echo $prog['progID'] ?>" readonly />
            <?php
            }
            ?>

        </ul>
        <label for="session">Session</label>
        <input class="chosen-value sess-id" type="hidden" value="10023">
        <input class="chosen-value sess-input" type="text" value="July 2019" placeholder="Search session">
        <ul class="value-list sess-list">
            <?php
            $sessions = getSessions();
            foreach ($sessions as $sess) {
            ?>
                <input class="value sess-value" value="<?php echo $sess['sessName'] ?>" id="<?php echo $sess['sessID'] ?>" readonly />
            <?php
            }
            ?>
        </ul>
        <label for="course-code">Course</label>
        <input class="chosen-value sub-id" type="hidden" value="CSIT321">
        <input class="chosen-value sub-input" type="text" value="CSIT321 Project" placeholder="Search course">
        <ul class="value-list sub-list">
            <?php
            $subjects = getSubjects();
            foreach ($subjects as $sub) {
            ?>
                <input class="value sub-value" value="<?php echo $sub['subID'] . " " . $sub['subName'] ?>" id="<?php echo $sub['subID'] ?>" readonly />
            <?php
            }
            ?>
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
    VALUES ($subCount, '" . $_SESSION['user']['uid'] . "')";
    $reqID = insertQuery($query, 1);

    for ($i = 0; $i < $subCount; $i++) {
        $progID = $_GET[$keys[0]];
        $sessID = $_GET[$keys[2]];
        $subID = $_GET[$keys[4]];

        $ssID = getSession_SubjectID($sessID, $subID);
        $query = "INSERT INTO request_subjects (reqID, progID, ssID)
        VALUES ($reqID, $progID, $ssID)";
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

function getSession_SubjectID($sessID, $subID)
{
    $query = "SELECT ssID FROM `session_subjects` WHERE `subID` = '$subID' AND `sessID` = $sessID";
    $result = selectQuery($query);
    if ($result) {
        return $result[0]['ssID'];
    }
}

?>