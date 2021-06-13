<?php

// create new session
$_SESSION['progID'] = $_GET['progID'];
if (isset($_GET['updateSubject'])) {
    include_once('./func.php');
    include_once("../../db_connect.php");
    updateSubject($_GET['subID'], $_GET['subName']);
    $header = "Location: ../sessions.php?progID=".$_SESSION['progID'];
    header($header);
} else if (isset($_GET['newSession'])) {
    session_start();
    include_once('./func.php');
    include_once("../../db_connect.php");
    newSession($_GET['sessName'], $_GET['progID']);
} else if (isset($_GET['newSubject'])) {
    session_start();
    include_once('./func.php');
    include_once("../../db_connect.php");
    newSubject($_GET['progID'], $_GET['subID'], $_GET['subName']);
} else if (isset($_GET['delete'])) {
    session_start();
    include_once('../func/func.php');
    include_once("../../db_connect.php");
    deleteSubject($_GET['delete'], $_GET['progID']);
} else if (isset($_GET['progID'])) {
    // view sessions
    include_once('./func/func.php');
    include_once("../db_connect.php");
}


function showSessions($progID)
{
    $query = "SELECT sessID, sessName FROM `session` 
    WHERE progID = '$progID' AND `status` = 1
    ORDER BY sessName";
    $result = selectQuery($query);
    if ($result) { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Session</th>
            </tr>
            <?php
            foreach ($result as $sess) { ?>
                <tr>
                    <td><?php echo $sess['sessID'] ?></td>
                    <td class="status">
                        <span><?php echo $sess['sessName'] ?></span>
                        <a href="./subjects.php?progID=<?php echo $progID ?>&sessID=<?php echo $sess['sessID'] ?>" class="arrow">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </td>
                </tr>
        <?php }
        } else {
            echo "It feels a little lonely here";
        }
        ?>
        </table>
    <?php
}

function showSubjects($progID)
{ ?>
        <div class="heading">
            <h2>List of Subjects</h2>
            <button onclick="showModal(2)">
                <i class="fas fa-plus"></i>
                <span>New Subject</span>
            </button>
        </div>
        <div class="card request-list">

            <?php $query = "SELECT sub.subID, sub.subName FROM `subject` sub WHERE `progID` = '$progID' AND `status` = 1";
            $result = selectQuery($query);
            if ($result) { ?>
                <table>
                    <tr>
                        <th>Subjects</th>
                    </tr>
                    <?php foreach ($result as $sub) { ?>
                        <tr>
                            <td class="status"><?php echo $sub['subID'] . " " . $sub['subName'] ?>
                                <div class="row-actions">
                                    <a class="arrow" onclick="showModal(3); editSubjectForm('<?php echo $sub['subID'] ?>','<?php echo $sub['subName'] ?>')">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a class="arrow" onclick="deletePrompt('<?php echo $sub['subID'] ?>', '<?php echo $_SESSION['progID'] ?>', 'subject')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
        </div> <?php } else {
                echo "There are no subjects";
            }
        }

        /*
         * New Session
         */

        function newSession($sessName, $progID)
        {
            $query = "INSERT INTO `session`(`sessName`, `progID`) VALUES ('$sessName', $progID)";
            $id = insertQuery($query, 1);

            if ($id) {
                getAllSubjects($progID, $id);
                $header = "Location: ../sessions.php?progID=" . $_SESSION['progID'];
                header($header);
            } else die("<br>New session error");
        }

        function getAllSubjects($progID, $sessID) // to add new subject into each session
        {
            $query = "SELECT sub.subID FROM `subject` sub WHERE `progID` = '$progID' AND `status` = 1";
            $result = selectQuery($query);

            if ($result) {
                foreach ($result as $sub) {
                    createSubjectsForNewSession($sub['subID'], $sessID);
                }
            }
            $header = "Location: ../sessions.php?progID=" . $_SESSION['progID'];
            header($header);
        }

        function createSubjectsForNewSession($subID, $sessID)
        {
            $query = "INSERT INTO `session_subjects`(`subID`, `sessID`) VALUES ('$subID', $sessID)";
            insertQuery($query, 0);
        }


        /*
 * New subject
*/

        function newSubject($progID, $subID, $subName)
        {
            $query = "INSERT INTO `subject`(`subID`, `subName`, `progID`) VALUES ('$subID','$subName', $progID)";
            $result = insertQuery($query, 0);
            if (!$result) { // previously deleted subject (status = false)
                updateSubject($subID, $subName);
                updateSessionSubjects($subID);
                $header = "Location: ../sessions.php?progID=" . $_SESSION['progID'];

                header($header);
            } else {
                // get all sessions
                $query = "SELECT sessID FROM `session`";
                $result = selectQuery($query);

                if ($result) {
                    foreach ($result as $sess) {
                        // echo implode($sess) . " ";
                        createSubjectForEachSession($subID, $sess['sessID']);
                    }
                    $header = "Location: ../sessions.php?progID=" . $_SESSION['progID'];
                    header($header);
                } else die("stop now");
            }
        }

        function createSubjectForEachSession($subID, $sessID)
        {
            $query = "INSERT INTO `session_subjects` (`subID`, `sessID`) VALUES ('$subID', $sessID) ";
            insertQuery($query, 0);
        }


        function updateSubject($subID, $subName)
        {
            $query = "UPDATE `subject` SET `subName` = '$subName', `status` = 1 WHERE subID = '$subID'";
            updateQuery($query);
        }

        function updateSessionSubjects($subID)
        {
            $query = "UPDATE `session_subjects` SET `status` = 1  WHERE subID = '$subID'";
            updateQuery($query);
        }

        function deleteSubject($subID, $progID)
        {
            $query = "UPDATE `subject` SET `status` = 0 WHERE subID = '$subID'";
            updateQuery($query);
            $query = "UPDATE `session_subjects` SET `status` = 0 WHERE subID = '$subID'";
            updateQuery($query);
            $header = "Location: ../sessions.php?progID=" . $progID;
            header($header);
        }
