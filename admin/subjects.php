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
            <div class="heading">
                <h2>Subjects</h2>
                <button onclick="showModal('sub')">
                    <i class="fas fa-plus"></i>
                    <span>New Subject</span>
                </button>
            </div>
            <?php showSubjects($_SESSION['progID'],$_GET['id']) ?>
        </div>
    </div>
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
                    <label for="">Course Structure</label>
                    <label for="upload-input" class="upload-btn">
                        <i class="fas fa-upload"></i>
                        <span>Upload file</span>
                        <input type="file" name="progName" id="upload-input">
                    </label>
                    <div class="buttons">
                        <button class="cancel-btn" type="button" onclick="hideModal('sub')">
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