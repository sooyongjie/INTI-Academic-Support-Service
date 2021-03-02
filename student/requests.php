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
            <label for="">Date</label>
            <p>28th February 2021</p>
            <label for="">Subjects</label>
            <p>3</p>
            <label for="">Status</label>
            <div class="col">
                <p>Pending</p>
                <a href="./request-view.php" class="view-request">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="card request section">
            <div class="heading">
                <h2>Request #10001</h3>
            </div>
            <label for="">Date</label>
            <p>28th February 2021</p>
            <label for="">Subjects</label>
            <p>3</p>
            <label for="">Status</label>
            <div class="col">
                <p>Pending</p>
                <a href="./request-view.php" class="view-request">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>