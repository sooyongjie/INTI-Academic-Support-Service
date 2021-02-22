<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <div class="container center">
    <a href="./new-request.php" class="button card section">
      <i class="far fa-clipboard-list"></i>
      <span>Send Request</span>
    </a>
    <a href="./requests.php" class="button card section">
      <i class="far fa-history"></i>
      <span>View Requests</span>
    </a>
  </div>
  <?php include_once('./components/toast.php') ?>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>

</html>