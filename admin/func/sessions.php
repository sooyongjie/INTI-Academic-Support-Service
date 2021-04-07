<?php

// view sessions
if (isset($_GET['id'])) {
    include_once('./func/func.php');
    include_once("../db_connect.php");
    $_GET['progID'] = $_GET['id'];
}

if (isset($_GET['sessName'])) {
    //only load files if creating new session
    include_once('./func.php');
    include_once("../../db_connect.php");
    session_start();
    newSession($_GET['sessName'], $_GET['progID']);
}

// create new session
if (isset($_GET['newSession'])) {
}

function showSessions($progID)
{
    $query = "SELECT * FROM `session` WHERE progID = '$progID'";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $sess) {
            showSession($sess);
        }
    }
}

function showSession($sess)
{ ?>
    <div class="heading">
        <h3><?php echo $sess['sessName'] ?></h3>
        <a href="./subjects.php?id=<?php echo $sess['sessID'] ?>">
            <i class="fas fa-arrow-right"></i>
            <span>All subjects</span>
        </a>
    </div>

<?php }

function newSession($sessName, $progID)
{
    $query = "INSERT INTO `session`(`sessName`, `progID`) VALUES ('$sessName', $progID)";
    $result = insertQuery($query, 0);

    if ($result) {
        $header = "Location: ../sessions.php?id=" . $_SESSION['progID'];
        header($header);
    } else die("<br>New session error");
}
