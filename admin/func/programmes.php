<?php

require_once('./func/func.php');
require("../db_connect.php");

unset($_SESSION['progID']);

function showProgrammes()
{
    $query = "SELECT * FROM `programme`";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $prog) {
            showProgram($prog);
        }
    }
}

function showProgram($prog)
{ ?>
    <div class="heading">
        <h3><?php echo $prog['progName'] ?></h3>
        <a href="./sessions.php?id=<?php echo $prog['progID'] ?>">
            <i class="fas fa-arrow-right"></i>
            <span>All subjects</span>
        </a>
    </div>
    
<?php }
