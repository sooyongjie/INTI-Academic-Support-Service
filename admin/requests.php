<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <title>Requests</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./func/func.php') ?>
  <?php include_once('./func/requests.php') ?>
  <div class="container">
    <div class="content-container">
      <?php include_once('./components/options.php') ?>
      <?php
      if (isset($_GET['id'])) { ?>
        <div class="section">
          <!-- Request  -->
          <div class="heading">
            <h2>Request <?php  echo $_GET['id']?></h2>
          </div>
          <div class="card request-list">
            <?php
            echo "Request details"
            ?>
          </div>
        </div>
      <?php } else { ?>
        <div class="section">
          <!-- Pending Requests  -->
          <div class="heading">
            <h2>Pending Requests</h2>
          </div>
          <div class="card request-list">
            <?php
            pendingRequests();
            ?>
          </div>
        </div>
        <div class="section">
          <!-- All Requests  -->
          <div class="heading">
            <h2>All Requests</h2>
          </div>
          <div class="card request-list">
            <?php
            allRequests();
            ?>
          </div>
        </div>
      <?php }
      ?>
    </div>
  </div>
</body>

</html>