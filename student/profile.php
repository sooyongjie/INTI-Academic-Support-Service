<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <div class="container row">
    <form class="card form profile section">
      <div class="heading">
        <h2>Profile</h2>
      </div>
      <label for="programme">Username</label>
      <input type="text" id="programme" value="sooyongjie" />
      <label for="programme">Full name</label>
      <input type="text" id="programme" value="Soo Yong Jie" />
      <label for="session">Email</label>
      <input type="text" id="session" value="j17025666@student.newinti.edu.my" />
      <label for="">Current Password</label>
      <input type="password" value="">
      <label for="">New Password</label>
      <input type="password" value="">
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
<script src="js/dropdown.js"></script>

</html>