<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/admin/admin.css" />
  <link rel="stylesheet" href="../css/style.css" />
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