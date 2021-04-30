<?php

require("../db_connect.php");


function payment()
{
    $query = "SELECT reqID, amount, token FROM payment WHERE token IS NOT NULL ORDER BY reqID desc LIMIT " . $_SESSION['limit'] . " ";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $pay) {
            $url = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/req%23" . $pay['reqID'] . "?alt=media&token=" . $pay['token']; ?>
            <div class="card request-list">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>
                            <a href="./requests.php?id=<?php echo $pay['reqID'] ?>">
                                <?php echo $pay['reqID'] ?>
                            </a>
                        </td>
                        <td><?php echo "RM" . $pay['amount'] ?></td>
                        <td class="status">
                            <span>Paid</span>

                            <a href="<?php echo $url ?>" class="arrow">
                                <i class="far fa-file-image"></i>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
<?php   }
    }
}
