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
        case '2':
            return "Completed";
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
                <h2>It's lonely here.</h2>
            </div>
        </div>
    <?php } ?>
    <?php
}

function requestView()
{
    $query = "SELECT r.reqID, `datetime`, p.amount , `status`, p.token FROM requests r 
    INNER JOIN payment p ON r.reqID = p.reqID 
    WHERE r.reqID = '" . $_GET['id'] . "' LIMIT 1";

    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) {
            $_SESSION['reqID'] = $row['reqID'];
            $_SESSION['status'] = $row['status']; ?>
            <div class="card request section">
                <div class="heading">
                    <h2>Request #<?php echo $row['reqID'] ?></h2>
                    <input type="hidden" id="request-id" value="<?php echo $_SESSION['reqID'] ?>" />
                </div>
                <label for="">Date</label>
                <p><?php echo date("jS F Y", strtotime($row['datetime'])) ?></p>
                <label for="">Total Amount</label>
                <p><?php echo 'RM' . $row['amount'] ?></p>
                <label for="">Status</label>
                <p><?php echo status($row['status']) ?></p>
                <label for="">Payment</label>
                <?php paymentDetails($row['token']); ?>
            </div>
        <?php
        }
    }
}

function paymentDetails($token)
{
    if ($token == "") {
        echo "<p>Pending</p>";
    } else {
        $GLOBALS['payment'] = 1;
        $url = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/req%23" . $_SESSION['reqID'] . "?alt=media&token=" . $token;  ?>
        <a href="<?php echo $url ?>" class="receipt-link">
            <i class="far fa-file-image"></i>
            <span class="link">Receipt</span>
        </a>
        <?php
    }
}

function subjects()
{
    $query = "SELECT prog.progName, ss.subID, sub.subName, sess.sessName, ss.token FROM request_subjects rs
    INNER JOIN `session_subjects` ss ON rs.ssID = ss.ssID 
    INNER JOIN programme prog ON rs.progID = prog.progID 
    INNER JOIN `subject` sub ON ss.subID = sub.subID 
    INNER JOIN `session` sess ON ss.sessID = sess.sessID 
    WHERE rs.reqID = " . $_GET['id'] . "";


    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $row) { ?>
            <div class="card subject">
                <label for="">Programme</label>
                <p><?php echo $row['progName'] ?></p>
                <label for="">Subject</label>
                <div class="subject-details">
                    <p><?php echo $row['subID'] . " " . $row['subName'] ?></p>
                    <?php if ($_SESSION['status'] == 2) courseStructureURL($row['token']) ?>
                </div>
                <label for="">Session</label>
                <p><?php echo $row['sessName']   ?></p>
            </div>
        <?php
        }
    } else {
        echo "oof, am malfunction";
    }
}

function courseStructureURL($token)
{
    if ($token != "") {
        $baseURL = "https://firebasestorage.googleapis.com/v0/b/inti-academic-support.appspot.com/o/CSIT321%20July%202020?alt=media&token="; ?>
        <a href="<?php echo $baseURL . $token ?>">
            <i class="far fa-external-link-square-alt"></i>
        </a>
    <?php }
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
                <i class="far fa-external-link-square-alt"></i>
            </a>
        </div>
        <div class="payment-info">
            <img src="../img/pb.png" alt="">
            <div>
                <p>Soo Yong Jie</p>
                <p>10988333</p>
            </div>
            <a href="https://www2.pbebank.com/myIBK/apppbb/servlet/">
                <i class="far fa-external-link-square-alt"></i>
            </a>
        </div>
    </div>
    <div class="heading">
        <h2>Payment</h3>
    </div>
    <form action="./func/payment.php" method="POST" id="receipt-form">
        <label for="receipt-input" class="receipt-input">
            <i class="input-icon fas fa-upload"></i>
            <span class="input-name">Upload Receipt</span>
            <input type="hidden" name="token" id="token">
            <input type="hidden" name="reqID" value="<?php echo $_GET['id'] ?>">
            <input type="file" name="" id="receipt-input" onchange="onInsertFile()">
        </label>
    </form>
<?php
}
