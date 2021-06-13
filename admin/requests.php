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
          <?php include_once('./components/pagination.php') ?>
        </div>
        <!-- All Requests  -->
        <div class="section">
          <div class="heading">
            <h2>All Requests</h2>
            <a href="./requests-all.php">
              <i class="fas fa-arrow-right"></i>
              <span>All subjects</span>
            </a>
          </div>
        </div>
      <?php
      } else { ?>
        <!-- Request Details  -->
        <div class="section">
          <div class="heading">
            <i class="fas fa-arrow-left" onclick="window.location.href='./requests.php'"></i>
            <h3>Request <?php echo $_GET['id'] ?></h3>
          </div>
          <?php $result = requestDetails($_GET['id']) ?>
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
  <?php include_once('./components/toast.php') ?>
</body>
<script src="./js/offset.js"></script>
<script src="./js/toast.js"></script>


</html>