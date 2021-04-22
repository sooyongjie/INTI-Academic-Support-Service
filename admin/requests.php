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
      if (!isset($_GET['id'])) { ?>
        <!-- Pending Requests  -->
        <div class="section">
          <div class="heading">
            <h2>Pending Requests</h2>
          </div>
          <div class="card request-list">
            <?php pendingRequests() ?>
          </div>
          <!-- Pagination -->
          <input type="hidden" value="<?php echo $_SESSION['offset'] ?>" name="offset" id="offset">
          <input type="hidden" value="<?php echo $_SESSION['limit'] ?>" name="limit" id="limit">
          <form class="pagination">
            <?php
            if ($_SESSION['offset'] != 0 && $_SESSION['offset'] % $_SESSION['limit'] == 0) {
            } else {
            } ?>
            <?php
            if ($_SESSION['page'] == 0) { ?>
              <button class="pagination-disabled">
                <i class="fas fa-angle-left"></i>
              </button>
            <?php } else { ?>
              <button type="button" onclick="minusOffset()">
                <i class="fas fa-angle-left pagination-enabled"></i>
              </button>
            <?php } ?>
            <input type="number" value="<?php echo $_SESSION['page'] ?>" name="page" id="page-input">
            <button type="button" onclick="addOffset()">
              <i class="fas fa-angle-right pagination-enabled"></i>
            </button>
          </form>
        </div>
        <!-- All Requests  -->
        <div class="section">
          <div class="heading">
            <!-- <h2>All Requests</h2> -->
          </div>
        </div>
      <?php
      } else { ?>
        <!-- Request Details  -->
        <div class="section">
          <div class="heading">
            <h3>Request <?php echo $_GET['id'] ?></h3>
          </div>
          <div class="card request-details">
            <?php $result = requestDetails($_GET['id']) ?>
          </div>
          <?php
          if ($result) { ?>
            <div class="section">
              <div class="heading">
                <h3>Subjects</h3>
              </div>
              <div class="subjects">
                <?php requestSubjects($_GET['id']) ?>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php if (isset($_SESSION['toast'])) include_once('./components/toast.php') ?>
</body>
<script src="./js/offset.js"></script>

</html>