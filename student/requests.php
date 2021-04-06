<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>
    <?php include_once('./func/func.php') ?>
    <?php include_once('./func/requests.php') ?>
    <div class="container row">
        <?php
        if (isset($_GET['id'])) requestView();
        else requests();
        ?>
    </div>
    <?php include_once('./components/fab.php') ?>
    <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>