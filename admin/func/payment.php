<?php

require("../db_connect.php");


function payment()
{
    $query = "SELECT payID, reqID, amount, token FROM payment 
            WHERE token IS NOT NULL ORDER BY payID DESC, reqID desc LIMIT " . $_SESSION['limit'] . " ";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $pay) {
            $url = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/req%23" . $pay['reqID'] . "?alt=media&token=" . $pay['token']; ?>

            <tr>
                <td>
                    <?php echo $pay['payID'] ?>
                </td>
                <td>
                    <a class="link" href="./requests.php?id=<?php echo $pay['reqID'] ?>">
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

<?php   }
    } else {
        echo "It is feeling a lil' lonely here";
    }
}
