<?php

require_once('./func/func.php');
require("../db_connect.php");

$_SESSION['progID'] = $_GET['id'];

function showSessions($prog)
{
    $query = "SELECT * FROM `session` WHERE progID = '$prog'";
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
