<?php

if (isset($_GET['progName'])) {
    // create new programme
    require_once('./func.php');
    require_once("../../db_connect.php");
    newProgramme($_GET['progName']);
} else {
    // display all programme
    require_once('./func/func.php');
    require_once("../db_connect.php");
}

function showProgrammes()
{
    $query = "SELECT * FROM `programme`";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $prog) {
            showProgramme($prog);
        }
    } else {
        echo "It feels a little lonely here";
    }
}

?>
<!-- <div class="heading">
        <h3><?php echo $prog['progName'] ?></h3>
        <a href="./sessions.php?progID=<?php echo $prog['progID'] ?>">
            <i class="fas fa-arrow-right"></i>
            <span>All subjects</span>
        </a>
    </div> -->
<?php

function showProgramme($prog)
{ ?>
    <tr>
        <td><?php echo $prog['progID'] ?></td>
        <td class="status">
            <span><?php echo $prog['progName'] ?></span>
            <a href="./sessions.php?progID=<?php echo $prog['progID'] ?>" class="arrow">
                <i class="fas fa-arrow-right"></i>
            </a>
        </td>
    </tr>
<?php }

function newProgramme($progName)
{
    $query = "INSERT INTO `programme`(`progName`) VALUES ('$progName')";
    $result = insertQuery($query, 0);

    if ($result) {
        header("Location: ../programmes.php");
    } else die("<br>New session error");
}
