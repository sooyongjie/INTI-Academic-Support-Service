<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>

    <div class="container row request-confirmation">
        <div class="card request summary section">
            <div class="heading">
                <h2>Courses</h2>
            </div>
            <?php
            $keys = array_keys($_GET);
            $size = sizeof($_GET);
            /*
            print_r($keys);
            for ($i = 0; $i < $size; $i++) {
                echo "  value: "
                    . $_GET[$keys[$i]] . "\n";
            }
            */
            $numOfSubs = $size / 6;
            $subIndex = 5;
            $sessIndex = 3;
            // echo $numOfSubs;
            for ($i = 0; $i < $numOfSubs; $i++) {
            ?>
                <div class="subject">
                    <p><?php echo $_GET[$keys[$subIndex]] ?> (<?php echo $_GET[$keys[$sessIndex]] ?>)</p>
                    <span>RM1</span>
                </div>
            <?php
                $subIndex = $subIndex + 6;
                $sessIndex = $sessIndex + 6;
            } ?>

            <div class="sub-heading">
                <h3>Order Info</h3>
            </div>
            <div class="order-info">
                <div>
                    <p>Total</p>
                    <h3 class="total-price">
                    <?php echo "RM".$numOfSubs.".00" ?>
                    </h3>
                </div>
            </div>
            <button onclick="window.location.href='new-request.php?<?php echo GETvalues() ?>'">
                <span>Confirm</span>
            </button>
        </div>
    </div>

    <?php
    function GETvalues()
    {
        $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return substr($link, strpos($link, "?") + 1);
    }
    ?>

    <?php include_once('./components/toast.php') ?>
    <?php include_once('./components/fab.php') ?>
    <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/submit-request.js"></script>

</html>

<?php
/*
<?php
    $request = [];

    foreach ($_GET as $key => $value) {
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