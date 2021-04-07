<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('./components/head.php') ?>
    <?php include_once('./func/sessions.php') ?>

    <title>Sessions</title>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <div class="container">
        <div class="content-container">
            <?php include_once('./components/options.php') ?>
            <div class="heading">
                <!-- <i class="fas fa-arrow-left"></i> -->
                <h2>Sessions</h2>
                <button onclick="showModal()" class="show">
                    <i class="fas fa-plus"></i>
                    <span>New Session</span>
                </button>
            </div>
            <?php showSessions($_GET['id']) ?>
        </div>
    </div>
    <div class="modal-container prog-form">
        <div class="modal form">
            <div class="heading">
                <h3>New Session</h3>
            </div>
            <div class="modal-body">
                <form action="./func/sessions.php" method="GET" class="new-form">
                    <label for="">Name</label>
                    <input type="text" name="sessName" placeholder="Session" autocomplete="off">
                    <input type="hidden" name="progID" value="<?php echo $_GET['id'] ?>">
                    <div class="buttons">
                        <button class="cancel-btn" type="button" onclick="hideModal()">
                            <span>Cancel</span>
                        </button>
                        <button>
                            <span>Confirm</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./js/modal.js"></script>

</html>