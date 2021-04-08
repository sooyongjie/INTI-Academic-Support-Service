<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
    <?php include_once('./func/subjects.php') ?>
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
    <div class="modal-container sub-form">
        <div class="modal form sub-modal">
            <div class="heading">
                <h3>New subject</h3>
            </div>
        </div>
    </div>
</body>
<script src="./js/modal.js"></script>

</html>