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

?>