<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INTI Academic Services</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?&family=Roboto:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <!-- <link rel="stylesheet" href="../css/student/student.css" /> -->
  <link rel="stylesheet" href="../css/student/student.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>

  <div class="loading-screen">
    <svg class="spinner" viewBox="0 0 50 50">
      <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
    </svg>
  </div>
  <div class="container">
    <form class="card request form">
      <div class="heading">
        <h2>New Request</h2>
      </div>
      <label for="">Programme</label>
      <input type="text" value="University of Wollongong" />
      <label for="">Session</label>
      <input type="text" value="July 2020" />
      <label for="">Course Code</label>
      <input type="text" value="CSIT321" />
      <button>
        <span>Submit</span>
      </button>
    </form>
  </div>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/home.js"></script>
<script src="js/theme.js"></script>

</html>