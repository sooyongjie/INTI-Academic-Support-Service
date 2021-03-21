<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>

    <div class="container request-confirmation">
        <div class="card request summary section">
            <div class="heading">
                <h2>Courses</h2>
            </div>
            <div class="subject">
                <p>CSIT321 Project (July 2019)</p>
                <span>RM1</span>
            </div>
            <div class="subject">
                <p>CSIT321 Project (July 2019)</p>
                <span>RM1</span>
            </div>

            <div class="sub-heading">
                <h3>Order Info</h3>
            </div>
            <div class="order-info">
                <div>
                    <p>Receive by</p>
                    <div class="select">
                        <span>Self-collect</span>
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <div>
                    <p>Total</p>
                    <h3 class="total-price">RM2.00</h3>
                </div>
            </div>
            <button>
                <span>Confirm</span>
            </button>
        </div>

    </div>

    <?php include_once('./components/toast.php') ?>
    <?php include_once('./components/fab.php') ?>
    <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>

<?php
/*
<?php
    $request = [];

    foreach ($_POST as $key => $value) {
        $request[] = $value;
    }
    $length = count($request) / 3;

    for ($i = 0; $i < $length; $i++) {
    ?>
        <div class="section card subject">
            <label for="">Programme</label>
            <p><?php echo $request[$i] . "<br>"; ?></p>
            <label for="">Session</label>
            <p><?php echo $request[$i + 1] . "<br>"; ?></p>
            <label for="">Course</label>
            <p><?php echo $request[$i + 2] . "<br>"; ?></p>
        </div>
    <?php
    }
    ?>
*/

?>