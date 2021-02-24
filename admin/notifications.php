<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <title>Notifications</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <div class="container">
    <div class="content-container">
      <?php include_once('./components/options.php') ?>
      <div class="heading">
        <h2>Notifications</h2>
        <button>
          <i class="far fa-trash-alt"></i>
          <span>Remove All</span>
        </button>
      </div>
      <div class="notification-container">
        <div class="day">
          <h3>Today</h3>
          <div class="notification">
            <div class="notification-heading">
              <h4>New Request from Soo Yong Jie</h4>
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="notification">
            <div class="notification-heading">
              <h4>New Request from Soo Yong Jie</h4>
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="notification-body"></div>
          </div>
        </div>
        <!--  -->
        <div class="day">
          <h3>Yesterday</h3>
          <div class="notification">
            <div class="notification-heading">
              <h4>New Request from Soo Yong Jie</h4>
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="notification">
            <div class="notification-heading">
              <h4>New Request from Soo Yong Jie</h4>
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="notification-body"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>