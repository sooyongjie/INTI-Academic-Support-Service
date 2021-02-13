<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>
  <div class="container row">
    <form class="card request section">
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