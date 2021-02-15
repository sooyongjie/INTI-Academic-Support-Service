<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <div class="container row">
    <form class="card form section">
      <div class="heading">
        <h2>New Request</h2>
      </div>
      <label for="programme">Programme</label>
      <input type="text" id="programme" value="University of Wollongong" />
      <label for="session">Session</label>
      <input type="text" id="session" value="July 2020" />
      <label for="course-code">Course Code</label>
      <input type="text" id="course-code" value="CSIT321" />
      <button>
        <span>Submit</span>
      </button>
    </form>
  </div>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>