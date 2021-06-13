<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <div class="container row">
    <form method="POST" action="./func/update-profile.php" class="card form profile section">
      <div class="heading">
        <h2>Profile</h2>
      </div>
      <label for="username">Username</label>
      <input type="text" id="username" value="sooyongjie" />
      <label for="fullname">Full name</label>
      <input type="text" id="fullname" value="Soo Yong Jie" />
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="sooyongjie@gmail.com" />
      <label for="curpass">Current Password</label>
      <input type="password" name="curpass" id="curpass" value="">
      <label for="newpass">New Password</label>
      <input type="password" name="newpass" id="newpass" value="">
      <button type = "submit">
        <span>Submit</span>
      </button>
    </form>
  </div>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/dropdown.js"></script>

</html>