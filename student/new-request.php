<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') 
  ?>

  <?php
  include_once('./func/new-request.php');
  ?>

  <div class="container row request-form">
    <?php
    if (isset($_GET['prog1']))
      submitRequest();
    else {
      requestForm();
    }
    ?>

  </div>

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