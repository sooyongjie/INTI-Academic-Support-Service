<?php


// create new session
if (isset($_GET['sessName'])) {
    //only load files if creating new session
    session_start();
    include_once('./func.php');
    include_once("../../db_connect.php");
    newSession($_GET['sessName'], $_GET['progID']);
} else  if (isset($_GET['progID'])) {
    // view sessions
    include_once('./func/func.php');
    include_once("../db_connect.php");
}

function showSessions($progID)
{
    $query = "SELECT sessID, sessName FROM `session` WHERE progID = '$progID'";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $sess) {
            showSession($progID, $sess);
        }
    }
}

function showSession($progID, $sess)
{ ?>
    <div class="heading">
        <h3><?php echo $sess['sessName'] ?></h3>
        <a href="./subjects.php?progID=<?php echo $progID ?>&sessID=<?php echo $sess['sessID'] ?>">
            <i class="fas fa-arrow-right"></i>
            <span>All subjects</span>
        </a>
    </div>

<?php }

function newSession($sessName, $progID)
{
    $query = "INSERT INTO `session`(`sessName`, `progID`) VALUES ('$sessName', $progID)";
    $id = insertQuery($query, 1);

    if ($id) {
        getAllSubjects($progID, $id);
        $header = "Location: ../sessions.php?id=" . $_SESSION['progID'];
        // header($header);
    } else die("<br>New session error");
}

function getAllSubjects($progID, $sessID)
{
    $query = "SELECT sub.subID FROM `subject` sub WHERE progID = '$progID'";
    $result = selectQuery($query);

    if ($result) {
        foreach ($result as $sub) {
            createSubjectsForNewSession($sub['subID'], $sessID);
        }
        $header = "Location: ../sessions.php?progID=" . $_GET['progID'];
        header($header);
    } else die("<br>".$query);
}

function createSubjectsForNewSession($subID, $sessID)
{
    $query = "INSERT INTO `session_subjects`(`subID`, `sessID`) VALUES ('$subID', $sessID)";
    $result = insertQuery($query, 0);

    if (!$result) {
        die("<br>".$query);
    }
}

/*
 * Display list of subjects in Programme
*/

function showSubjects($progID)
{ ?>
    <div class="heading">
        <h2>List of Subjects</h2>
        <button onclick="showModal(2)">
            <i class="fas fa-plus"></i>
            <span>New Subject</span>
        </button>
    </div>
    <?php $query = "SELECT sub.subID, sub.subName FROM `subject` sub WHERE progID = '$progID'";
    $result = selectQuery($query);
    if ($result) { ?>
        <div class="card request-list">
            <table>
                <tr>
                    <th>Subjects</th>
                </tr>
                <?php foreach ($result as $sub) {
                    showSubject($sub);
                } ?>
            </table>
        </div>
    <?php }
}

function showSubject($sub)
{ ?>
    <tr>
        <td><?php echo $sub['subID'] . " " . $sub['subName'] ?></td>
    </tr>
<?php }
