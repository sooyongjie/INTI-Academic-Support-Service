<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <?php include_once('./func/new-request.php') ?>
  <?php
  if (!isset($_POST['prog1'])) {
    requestForm();
  } else {
    formConfirmation();
  }
  ?>

  <?php include_once('./components/toast.php') ?>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/new-request.js"></script>
<script src="js/dropdown.js"></script>

</html>