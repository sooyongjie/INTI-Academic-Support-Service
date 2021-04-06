<?php

require("../db_connect.php");

$GLOBALS['payment'] = 0;

function status($val)
{
    switch ($val) {
        case '0':
            return "Cancelled";
        case '1':
            return "Pending";
    }
}

function requests()
{
    $query = "SELECT reqID, `datetime`, subCount, `status` FROM requests r WHERE `uid` = '" . $_SESSION['user']['uid'] . "'";

    $result = selectQuery($query);
    if ($result) { ?>
        <?php foreach ($result as $row) { ?>
            <div class="card request section">
                <div class="heading">
                    <h2>Request #<?php echo $row['reqID'] ?></h3>
                </div>
                <label for="">Date</label>
                <p><?php echo date("jS F Y", strtotime($row['datetime'])) ?></p>
                <label for="">Subjects</label>
                <p><?php echo $row['subCount'] ?></p>
                <label for="">Status</label>
                <div class="col">
                    <p><?php echo status($row['status']) ?></p>
                    <a href="./request-view.php?id=<?php echo $row['reqID'] ?>" class="view-request">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        <?php
        }
    } else { ?>
        <div class="card request section">
            <div class="heading">
                <h2>:)</h2>
            </div>
        </div>
    <?php } ?>
    <?php
}

function requestView()
{
    $query = "SELECT r.reqID, `datetime`, p.amount , `status`, p.url FROM requests r 
    INNER JOIN payment p ON r.reqID = p.reqID 
    WHERE r.reqID = '" . $_GET['id'] . "'";

    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) {
            $_SESSION['reqID'] = $row['reqID']; ?>
            <div class="card request section">
                <div class="heading">
                    <h2>Request #<?php echo $row['reqID'] ?></h3>
                </div>
                <label for="">Date</label>
                <p><?php echo date("jS F Y", strtotime($row['datetime'])) ?></p>
                <label for="">Total Amount</label>
                <p><?php echo 'RM' . $row['amount'] ?></p>
                <label for="">Status</label>
                <p><?php echo status($row['status']) ?></p>
                <label for="">Payment</label>
                <p>
                    <?php
                    if ($row['url'] == "") {
                        echo "Pending";
                    } else {
                        $GLOBALS['payment'] = 1;
                        echo $row['url'];
                    }
                    ?>
                </p>
            </div>
        <?php
        }
    }
}

function subjects()
{
    $query = "SELECT prog.progName, rs.subID, sub.subName, sess.sessName FROM request_subjects rs
    INNER JOIN programme prog ON rs.progID = prog.progID 
    INNER JOIN `subject` sub ON rs.subID = sub.subID 
    INNER JOIN `session` sess ON rs.sessID = sess.sessID 
    WHERE rs.reqID = " . $_SESSION['reqID'] . "";

    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) { ?>
            <div class="card subject">
                <label for="">Programme</label>
                <p><?php echo $row['progName'] ?></p>
                <label for="">Course</label>
                <p><?php echo $row['subID'] . " " . $row['subName'] ?></p>
                <label for="">Amount</label>
                <p><?php echo $row['sessName'] ?></p>
            </div>
    <?php
        }
    } else {
        echo "oof, am malfunction";
    }
}

function payment()
{
    ?>
    <div class="heading">
        <h2>Payment Method</h2>
    </div>
    <p>Bank Transfer only</p>
    <div class="card">
        <div class="payment-info">
            <img src="../img/mb.png" alt="">
            <div>
                <p>Soo Yong Jie</p>
                <p>10988333</p>
            </div>
            <a href="https://www.maybank2u.com.my/">
                <i class="fas fa-external-link-square-alt"></i>
            </a>
        </div>
        <div class="payment-info">
            <img src="../img/pb.png" alt="">
            <div>
                <p>Soo Yong Jie</p>
                <p>10988333</p>
            </div>
            <a href="https://www2.pbebank.com/myIBK/apppbb/servlet/">
                <i class="fas fa-external-link-square-alt"></i>
            </a>
        </div>
    </div>
    <div class="heading">
        <h2>Payment</h3>
    </div>
    <?php
    if ($GLOBALS['payment'] == 1) {
    ?>
        <p class="payment-receipt">
            <i class="far fa-file-image"></i>
            <span>Hello am file</span>
        </p>
    <?php
    }
    ?>
    <label for="receipt-input" class="receipt-input">
        <i class="fas fa-upload"></i>
        <span>Upload Receipt</span>
        <input type="file" name="" id="receipt-input">
    </label>
<?php
}
