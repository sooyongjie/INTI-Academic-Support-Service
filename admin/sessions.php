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
                <button onclick="showModal(1)" class="show">
                    <i class="fas fa-plus"></i>
                    <span>New Session</span>
                </button>
            </div>
            <?php showSessions($_GET['progID']) ?>
            <?php showSubjects($_GET['progID']) ?>
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
                    <input type="hidden" name="progID" value="<?php echo $_GET['progID'] ?>">
                    <div class="buttons">
                        <button class="cancel-btn" type="button" onclick="hideModal(1)">
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
    <!-- New subject form -->
    <div class="modal-container sub-form">
        <div class="modal form sub-modal">
            <div class="heading">
                <h3>New subject</h3>
            </div>
            <div class="modal-body">
                <form action="" class="new-form">
                    <label for="">Subject ID</label>
                    <input type="text" name="progName" placeholder="ID">
                    <label for="">Subject Name</label>
                    <input type="text" name="progName" placeholder="Name">
                    <!-- <label for="">Course Structure</label> -->
                    <!-- <label for="upload-input" class="upload-btn">
                        <i class="fas fa-upload"></i>
                        <span>Upload file</span>
                        <input type="file" name="progName" id="upload-input">
                    </label> -->
                    <div class="buttons">
                        <button class="cancel-btn" type="button" onclick="hideModal(2)">
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