<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>

    <div class="container row">
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
    </div>

    <?php include_once('./components/toast.php') ?>
    <?php include_once('./components/fab.php') ?>
    <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>