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
        <h2>Profile</h2>
      </div>
      <label for="programme">Username</label>
      <input type="text" id="programme" value="sooyongjie" />
      <label for="session">Student e-mail</label>
      <input type="text" id="session" value="j17025666@student.newinti.edu.my" />
      <label for="course-code">Programme</label>
      <input type="text" id="course-code" value="University of Wollongong" />
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