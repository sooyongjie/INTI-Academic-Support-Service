<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/browser-image-compression@1.0.13/dist/browser-image-compression.js"></script>
    <script src="./js/firebase.js"></script>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>
    <?php include_once('./func/func.php') ?>
    <?php include_once('./func/requests.php') ?>
    <div class="container row request-view">
        <div class="top-section">
            <?php requestView() ?>
            <div class="payment-section section">
                <?php payment() ?>
            </div>
        </div>
        <div class="bottom-section section">
            <div class="heading">
                <h3>Subjects</h3>
            </div>
            <div class="subjects">
                <?php subjects() ?>
            </div>
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
    <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="./js/file.js"></script>

</html>