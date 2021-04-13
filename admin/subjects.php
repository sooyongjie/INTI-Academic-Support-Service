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
    <!-- New subject form -->
    <div class="modal-container sub-form">
        <div class="modal form sub-modal">
            <div class="heading">
                <h3>Upload Course Structure</h3>
            </div>
            <div class="modal-body">
                <form action="" class="new-form">
                    <label for="">Course Structure</label>
                    <label for="upload-input" class="upload-btn">
                        <i class="fas fa-upload"></i>
                        <span>Upload file</span>
                        <input type="file" name="progName" id="upload-input">
                    </label>
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