<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
    <title>Requests</title>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./func/func.php') ?>
    <?php include_once('./func/requests.php') ?>
    <div class="container">
        <div class="content-container">
            <?php include_once('./components/options.php') ?>
            <!-- All Requests  -->
            <div class="section">
                <div class="heading">
                    <i class="fas fa-arrow-left" onclick="window.location.href='./requests.php'"></i>
                    <h2>All Requests</h2>
                </div>
                <div class="card request-list">
                    <?php allRequests() ?>
                </div>
                <!-- Pagination -->
                <?php include_once('./components/pagination.php') ?>
            </div>
        </div>
    </div>
    <?php if (isset($_SESSION['toast'])) include_once('./components/toast.php') ?>
</body>
<script src="./js/offset.js"></script>

</html>