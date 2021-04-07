<?php

require_once('./func/func.php');
require("../db_connect.php");

function showSubjects($prog, $sess)
{
    $query = "SELECT s.subID, s.subName, ss.firebaseToken FROM `session_subjects` ss INNER JOIN `subject` s ON ss.subID = s.subID  WHERE sessID = '$sess'";
    $result = selectQuery($query);
    if ($result) { ?>
        <div class="card request-list">
            <table>
                <tr>
                    <th>Subject</th>
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
        <td><?php echo $sub['subID'] . " " . $sub['subName'] ?></td>
        <td class="status">
            <a href="https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/Birb_tiny.png?alt=media&token=85fbde9d-1766-4d80-9078-27d7fb740588" class="file">
            <?php
            if($sub['firebaseToken'] != "") {
                echo $sub['firebaseToken'];
            } else {
                echo "N/A";
            }
            ?>
            </a>
            <a href="" class="arrow">
                <i class="fas fa-file-upload"></i>
            </a>
        </td>
    </tr>
<?php }
