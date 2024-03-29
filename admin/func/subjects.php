<?php

if (isset($_POST['token'])) {
    require_once('./func.php');
    require("../../db_connect.php");
    uploadCourseStructure($_POST['ssID'], $_POST['token']);
} else if (isset($_GET['delete'])) {
    require_once('./func.php');
    require("../../db_connect.php");
    deleteSession($_GET['delete']);
} else {
    require_once('./func/func.php');
    require("../db_connect.php");
}

function showSubjects($progID, $sessID)
{ ?>
    <div class="heading">
        <i class="fas fa-arrow-left" onclick="window.location.href='sessions.php?progID=<?php echo $_GET['progID'] ?>'"></i>
        <h2>
            <?php
            $sessName = selectQuery("SELECT sessName FROM `session` WHERE sessID = '$sessID'");
            echo $sessName[0]['sessName'];
            echo "<input type='hidden' id='sess-name' value='" . $sessName[0]['sessName'] . "'>";
            ?>
        </h2>
        <button onclick="deletePrompt('<?php echo $_GET['sessID'] ?>', '<?php echo $_GET['progID'] ?>', 'session')">
            <i class="far fa-trash-alt"></i>
            <span>Delete</span>
        </button>
    </div>
    <?php $query = "SELECT sub.subID, sub.subName, ss.ssID, ss.sessID, sess.sessName, ss.token, ss.status FROM `session_subjects` ss 
    INNER JOIN `subject` sub ON ss.subID = sub.subID 
    INNER JOIN `session` sess ON ss.sessID = sess.sessID  
    WHERE ss.sessID = '$sessID' AND ss.status = 1";
    $result = selectQuery($query);
    if ($result) { ?>
        <div class="card request-list">
            <table>
                <tr>
                    <th>ssID</th>
                    <th>Subjects</th>
                    <th>File</th>
                </tr>
                <?php foreach ($result as $sub) {
                    showSubject($sub);
                } ?>
            </table>
        </div>
    <?php } else {
        echo "It feels a little lonely here";
    }
}

function showSubject($sub)
{ ?>
    <tr>
        <td><?php echo $sub['ssID'] ?></td>
        <td><?php echo $sub['subID'] . " " . $sub['subName'] ?></td>
        <td class="status">
            <?php
            if ($sub['token'] != "") {
                $baseURL = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/";
                //CSIT321%20July%202020
            ?>
                <a href="<?php echo $baseURL . $sub['subID'] . " " . $sub['sessName'] . "?alt=media&token=" . $sub['token'] ?>">
                    <i class="far fa-file-pdf"></i>
                </a>
                <a onclick="triggerInput(); updateSelectedSubject('<?php echo $sub['ssID'] ?>','<?php echo $sub['subID'] ?>');" class="arrow">
                    <i class="fas fa-file-upload"></i>
                </a>
            <?php
            } else {
            ?>
                <a onclick="triggerInput(); updateSelectedSubject('<?php echo $sub['ssID'] ?>','<?php echo $sub['subID'] ?>');">
                    <i class="fas fa-file-upload single"></i>
                </a>
            <?php
            }
            ?>

        </td>
    </tr>
<?php }

function uploadCourseStructure($ssID, $token)
{
    $query = "UPDATE `session_subjects` SET `token` = '$token' WHERE `ssID`= $ssID";

    $result = updateQuery($query);
    $header = "Location: ../subjects.php?progID=" . $_GET['progID'] . "&sessID=" . $_GET['sessID'];
    if ($result) header($header);
}

function updateSession($sessID)
{
    $query = "UPDATE `session` SET `status` = 1 WHERE sessID = '$sessID'";
    updateQuery($query);
}

function updateSessionSubjects($sessID)
{
    $query = "UPDATE `session_subjects` SET `status` = 1  WHERE sessID = '$sessID'";
    updateQuery($query);
}

function deleteSession($sessID)
{
    $query = "UPDATE `session` SET `status` = 0 WHERE sessID = '$sessID'";
    updateQuery($query);
    $query = "UPDATE `session_subjects` SET `status` = 0  WHERE sessID = '$sessID'";
    updateQuery($query);
    $header = "Location: ../sessions.php?progID=" . $_GET['progID'];
    header($header);
}
