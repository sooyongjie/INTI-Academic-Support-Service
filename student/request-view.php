<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>
    <div class="container row">
        <div class="card request section">
            <div class="heading">
                <h2>Request #10001</h3>
            </div>
            <label for="">Programme</label>
            <p>University of Wollongong</p>
            <label for="">Course Code</label>
            <p>CSIT321</p>
            <label for="">Session</label>
            <p>July 2019</p>
            <label for="">Status</label>
            <p>Pending</p>
            <label for="">Total Amount</label>
            <p>RM1</p>
        </div>
        <div class="payment section">
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
                <h2>Payment Details</h3>
            </div>
            <label for="receipt-input" class="receipt-input">
                <i class="fas fa-upload"></i>
                <span>Upload Receipt</span>
                <input type="file" name="" id="receipt-input">
            </label>
        </div>
    </div>
    <div class="toast-container">
        <div class="toast">
            <span class="toast-message">Welcome 👋🏻</span>
            <div class="close-btn-container">
                <button onclick="clearToast()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/upload-files.js"></script>

</html>