<?php

require("../db_connect.php");

function requests($result)
{
?>
    <table>
        <tr>
            <th class="id">ID</th>
            <th>Username</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row['reqID'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo date("d M Y", strtotime($row['datetime'])) ?></td>
                <td><?php echo date("g:ia", strtotime($row['datetime'])) ?></td>
                <td class="status">
                    <span>
                        <?php switch ($row['status']) {
                            case 0:
                                echo "Cancelled";
                                break;
                            case 1:
                                echo "Pending";
                                break;
                            case 2:
                                echo "Paid";
                                break;
                            case 3:
                                echo "Delivered";
                                break;
                        } ?>
                    </span>
                    <a href="?id=<?php echo $row['reqID'] ?>" class="arrow">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
}

function getNumOfRequests()
{
    $query = "SELECT COUNT(reqID) AS numOfReqs FROM requests WHERE `status` = '1'";
    $result = selectQuery($query);
    if ($result) {
        return $result;
    }
}

function pendingRequests()
{
    $temp = getNumOfRequests();
    $count = $temp[0]["numOfReqs"];
    $_SESSION['totalPages'] = ceil($_SESSION['count'] / $_SESSION['limit']);
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        WHERE `status` = '1' ORDER BY $sort desc LIMIT " . $_SESSION['offset'] . ", " . $_SESSION['limit'] . " ";
    } else {
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        WHERE `status` = '1' ORDER BY `datetime` desc LIMIT " . $_SESSION['offset'] . ", " . $_SESSION['limit'] . " ";
    }

    $result = selectQuery($query);
    if ($result) {
        requests($result);
    }
}

function allRequests()
{
    $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
    INNER JOIN user u on r.uid = u.uid ORDER BY `datetime` desc LIMIT " . $_SESSION['limit'] . " ";
    $result = selectQuery($query);
    if ($result) {
        requests($result);
    }
}


function status($val)
{
    switch ($val) {
        case '0':
            return "Cancelled";
        case '1':
            return "Pending";
        case '2':
            return "Completed";
    }
}

function requestDetails($id)
{
    $id = $_GET['id'];
    $query = "SELECT * FROM requests r
    INNER JOIN user u on r.uid = u.uid WHERE reqID = $id ";
    $result = selectQuery($query);
    if ($result) {
    ?>
        <label>Name</label>
        <label>Date</label>
        <label>Status</label>
        <label>Payment</label>
        <?php
        foreach ($result as $row) { ?>
            <span><?php echo $row['username'] ?></span>
            <span><?php echo date("d/m/Y g:ia", strtotime($row['datetime'])) ?></span>
            <span><?php echo status($row['status']) ?></span>
            <span>
                <?php
                if ($row['payID'])
                    echo $row['payID'];
                else echo "Pending";
                ?>
            </span>
        <?php   }
        return 1;
    } else {
        $_SESSION['toast'] = "No results were returned";
        return 0;
    };
}

function requestSubjects($id)
{
    $query = "SELECT progName, sessName, sub.subID, subName FROM request_subjects rs
    INNER JOIN programme p on rs.progID = p.progID 
    INNER JOIN `session` sess on rs.sessID = sess.sessID 
    INNER JOIN `subject` sub on rs.subID = sub.subID 
    WHERE reqID = $id ";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) {
        ?>
            <div class="card request-subject">
                <label for="">Programme</label>
                <span><?php echo $row['progName'] ?></span>
                <label for="">Session</label>
                <span><?php echo $row['sessName'] ?></span>
                <label for="">Course</label>
                <span><?php echo $row['subID'] . " " . $row['subName'] ?></span>
            </div>
<?php
        }
    }
}

?>