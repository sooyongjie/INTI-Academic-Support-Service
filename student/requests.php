<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INTI Academic Services</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?&family=Roboto:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- <link rel="stylesheet" href="../css/student/student.css" /> -->
    <link rel="stylesheet" href="../css/student/student.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
</head>

<body>
    <?php include_once('./components/nav.php') ?>
    <?php include_once('./components/spinner.php') ?>
    <div class="container row">
        <div class="card request section">
            <div class="heading">
                <h2>Request #10001</h3>
            </div>
            <label for="">Course Code</label>
            <p>CSIT321</p>
            <label for="">Session</label>
            <p>July 2019</p>
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
            <label for="">Course Code</label>
            <p>CSIT321</p>
            <label for="">Session</label>
            <p>July 2019</p>
            <label for="">Status</label>
            <div class="col">
                <p>Pending</p>
                <a href="./request-view.php" class="view-request">
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/home.js"></script>
<script src="js/theme.js"></script>

</html>