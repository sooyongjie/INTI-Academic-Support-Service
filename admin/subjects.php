<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
    <?php include_once('./func/subjects.php') ?>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>
    <script src="./js/firebase.js"></script>
    <title>Subjects</title>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <div class="container">
        <div class="content-container">
            <?php include_once('./components/options.php') ?>
            <?php showSubjects($_GET['progID'], $_GET['sessID']) ?>
        </div>
    </div>
    <!-- New subject form -->
    <div class="modal-container sub-form">
        <div class="modal form sub-modal">
            <div class="heading">
                <h3>Upload Course Structure</h3>
            </div>
            <form action="./func/subjects.php?<?php echo "progID=" . $_GET['progID'] . "&sessID=" . $_GET['sessID'] ?>" method="POST" class="course-structure-form">
                <input type="file" id="upload-input" onchange="onInsertFile()">
                <input type="hidden" name="ssID" id="ssID">
                <input type="hidden" name="subID" id="subID">
                <input type="hidden" name="token" id="token">
            </form>
            <!-- <div class="modal-body">
                
            </div> -->
        </div>
    </div>
</body>
<!-- <script src="./js/modal.js"></script> -->
<script src="./js/file.js"></script>

</html>