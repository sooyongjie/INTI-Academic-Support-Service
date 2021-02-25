<?php

function requests($result)
{
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo date("d/m/Y", strtotime($row['datetime'])) ?></td>
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


function pendingRequests()
{
    $query = "SELECT reqID, fullname, `datetime`, `status` FROM requests r
    INNER JOIN user u on r.uid = u.uid 
    WHERE `status` = '1' ";
    $result = selectQuery($query);
    if ($result) {
        requests($result);
    } else {
    }
}

function allRequests()
{
    $query = "SELECT reqID, fullname, `datetime`, `status` FROM requests r
    INNER JOIN user u on r.uid = u.uid ";
    $result = selectQuery($query);
    if ($result) {
        requests($result);
    } else {
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
            <span><?php echo $row['fullname'] ?></span>
            <span><?php echo date("d/m/Y g:ia", strtotime($row['datetime'])) ?></span>
            <span><?php echo $row['status'] ?></span>
            <span>
                <?php
                if ($row['payID'])
                    echo $row['payID'];
                else echo "Pending";
                ?>
            </span>
        <?php   }
    }
}

function requestSubjects($id)
{
    $query = "SELECT progName, sessYear, sub.subID, subName FROM request_subjects rs
    INNER JOIN programme p on rs.progID = p.progID 
    INNER JOIN `session` sess on rs.sessID = sess.sessID 
    INNER JOIN `subject` sub on rs.subID = sub.subID 
    WHERE reqID = $id ";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) {
        ?>
            <label for="">Programme</label>
            <span><?php echo $row['progName'] ?></span>
            <label for="">Session</label>
            <span><?php echo $row['sessYear'] ?></span>
            <label for="">Course</label>
            <span><?php echo $row['subID'] . " " . $row['subName'] ?></span>
<?php
        }
    }
}

?>