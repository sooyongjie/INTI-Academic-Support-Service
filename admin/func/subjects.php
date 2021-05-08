<?php

if (isset($_POST['token'])) {
    require_once('./func.php');
    require("../../db_connect.php");
    uploadCourseStructure($_POST['ssID'], $_POST['token']);
} else {
    require_once('./func/func.php');
    require("../db_connect.php");
}

function showSubjects($progID, $sessID)
{ ?>
    <div class="heading">
        <h2>
            <?php
            $sessName = selectQuery("SELECT sessName FROM `session` WHERE sessID = '$sessID'");
            echo $sessName[0]['sessName'];
            echo "<input type='hidden' id='sess-name' value='" . $sessName[0]['sessName'] . "'>";
            ?>
        </h2>
    </div>
    <?php $query = "SELECT sub.subID, sub.subName, ss.ssID, ss.token FROM `session_subjects` ss 
    INNER JOIN `subject` sub ON ss.subID = sub.subID WHERE ss.sessID = '$sessID'";
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
    <?php }
}

function showSubject($sub)
{ ?>
    <tr>
        <td><?php echo $sub['ssID'] ?></td>
        <td><?php echo $sub['subID'] . " " . $sub['subName'] ?></td>
        <td class="status">
            <?php
            if ($sub['token'] != "") {
                $baseURL = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/CSIT321%20July%202020?alt=media&token=";
            ?>
                <a href="<?php echo $baseURL . $sub['token'] ?>">
                    <i class="far fa-file"></i>
                </a>
                <a onclick="showModal(2); updateSelectedSubject('<?php echo $sub['ssID'] ?>','<?php echo $sub['subID'] ?>');" class="arrow">
                    <i class="fas fa-file-upload"></i>
                </a>
            <?php
            } else {
            ?>
                <a onclick="showModal(2); updateSelectedSubject('<?php echo $sub['ssID'] ?>','<?php echo $sub['subID'] ?>');">
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
