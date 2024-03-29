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
            <th>Status</th>
        </tr>
        <?php
        foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row['reqID'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo date("d M Y", strtotime($row['datetime'])) ?></td>
                <td class="status">
                    <span>
                        <?php echo status($row['status'], 0) ?>
                    </span>
                    <a href="./requests.php?id=<?php echo $row['reqID'] ?>" class="arrow">
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

function getNumOfRequests($status)
{
    if ($status == 1) {
        $query = "SELECT COUNT(reqID) AS numOfReqs FROM requests WHERE `status` = $status";
        $result = selectQuery($query);
        if ($result) {
            return $result;
        }
    } else {
        $query = "SELECT COUNT(reqID) AS numOfReqs FROM requests";
        $result = selectQuery($query);
        if ($result) {
            return $result;
        }
    }
}

function pendingRequests()
{
    $temp = getNumOfRequests(1);
    $count = $temp[0]["numOfReqs"];
    $_SESSION['totalPages'] = ceil($count / $_SESSION['limit']);
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        WHERE `status` = '1' ORDER BY $sort desc LIMIT " . $_SESSION['offset'] . ", " . $_SESSION['limit'] . " ";
    } else {
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        WHERE `status` = '1' ORDER BY `datetime` desc LIMIT 0, " . $_SESSION['limit'] . " ";
    }

    $result = selectQuery($query);
    if ($result) {
        requests($result);
    } else {
        echo "Yay! You have responded to every requests 🙌🏻";
    }
}

function allRequests()
{
    $temp = getNumOfRequests(-1);
    $count = $temp[0]["numOfReqs"];
    $_SESSION['totalPages'] = ceil($count / $_SESSION['limit']);
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        ORDER BY $sort desc LIMIT " . $_SESSION['offset'] . ", " . $_SESSION['limit'] . " ";
    } else {
        $query = "SELECT reqID, username, `datetime`, `status` FROM requests r
        INNER JOIN user u on r.uid = u.uid 
        ORDER BY `datetime` desc LIMIT " . $_SESSION['offset'] . ", " . $_SESSION['limit'] . " ";
    }

    $result = selectQuery($query);
    if ($result) {
        requests($result);
    } else {
        echo "It feels lonely here.";
    }
}

/*
 * Request details
*/

function getPayment($id)
{
    $query = "SELECT token FROM payment WHERE payID = $id ";
    $result = selectQuery($query);
    $url = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/req%23" . $id . "?alt=media&token=" . $result[0]['token'];
    return $url;
}

function requestSubjects($id)
{
    $query = "SELECT prog.progName, ss.subID, sub.subName, sess.sessName FROM request_subjects rs
    INNER JOIN `session_subjects` ss ON rs.ssID = ss.ssID 
    INNER JOIN programme prog ON rs.progID = prog.progID 
    INNER JOIN `subject` sub ON ss.subID = sub.subID 
    INNER JOIN `session` sess ON ss.sessID = sess.sessID 
    WHERE rs.reqID = " . $id . "";

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

function status($val, $type)
{
    if ($type == 0)
        switch ($val) {
            case '0':
                return "<span class='request-tag cancel-tag'>
                <i class='fas fa-times'></i>Cancelled
            </span>";
            case '1':
                return "<span class='request-tag pending-tag'>
                <i class='fas fa-circle'></i>Pending
            </span>";
            case '2':
                return "<span class='request-tag completed-tag'>
                <i class='fas fa-circle'></i>Completed
            </span>";
        }
    else
        switch ($val) {
            case 0:
                echo
                "<span class='request-tag cancel-tag' onclick='window.location.href = `./func/status.php?cancel=" . $_GET['id'] . "`'>
                        <i class='fas fa-times'></i>Cancelled
                    </span>
                    <span class='request-tag approve-tag hide-tag' onclick='window.location.href = `./func/status.php?approve=" . $_GET['id'] . "`'>
                        <i class='fas fa-check'></i>Approve
                    </span>";
                break;
            case 1:
                echo
                "<span class='request-tag approve-tag' onclick='window.location.href = `./func/status.php?approve=" . $_GET['id'] . "`'>
                        <i class='fas fa-check'></i>Approve
                    </span>
                    <span class='request-tag cancel-tag hide-tag' onclick='window.location.href = `./func/status.php?cancel=" . $_GET['id'] . "`'>
                        <i class='fas fa-times'></i>Cancel
                    </span>";
                break;
            case 2:
                echo
                "<span class='request-tag completed-tag'>
                        <i class='fas fa-circle'></i>Completed
                    </span>";
                break;
        }
}

function requestDetails($id)
{
    $id = $_GET['id'];
    $query = "SELECT * FROM requests r
    INNER JOIN user u on r.uid = u.uid WHERE reqID = $id ";
    $result = selectQuery($query);
    if ($result) { ?>
        <div class="card request-details">
            <label>Name</label>
            <label>Date</label>
            <label>Payment</label>
            <label style="height: 0px !"></label>
            <?php
            foreach ($result as $row) { ?>
                <span><?php echo $row['username'] ?></span>
                <span><?php echo date("d/m/Y g:ia", strtotime($row['datetime'])) ?></span>
                <span>
                    <?php

                    if ($row['payID'])
                        echo "<a class='link' href='" . getPayment($row['payID']) . "'>Paid</a>";
                    else echo "Pending";
                    ?>
                </span>
                <div class="tag-container">
                    <div class="">
                        <?php status($row['status'], 1) ?>
                    </div>
                </div>
        </div> <?php }
            return 1;
        } else {
            $_SESSION['toast'] = "No results were returned";
            return 0;
        };
    }
