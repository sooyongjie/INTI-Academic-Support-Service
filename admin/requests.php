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
        </div>
        <!-- All Requests  -->
        <div class="section">
          <div class="heading">
            <h2>All Requests</h2>
          </div>
          <div class="card request-list">
            <?php allRequests() ?>
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
            <div class="heading">
              <h3>Subjects</h3>
            </div>
            <div class="subjects">
              <div class="card request-subject">
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
</body>

</html>