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
      <div class="options-container">
        <div class="show-options">
          <span>Options</span>
          <i class="fas fa-caret-right"></i>
        </div>
        <div class="options">
          <div class="sort">
            <p>Sort By</p>
            <form method="GET">
              <input type="hidden" name="sort" value="name" />
              <button type="submit">
                <span>Name</span>
              </button>
            </form>
            <form method="GET">
              <input type="hidden" name="sort" value="date" />
              <button type="submit">
                <span>Date</span>
              </button>
            </form>
          </div>
          <form method="GET">
            <span>Show</span>
            <input type="number" name="entries" value="5" required />
            <span>entries</span>
          </form>
        </div>
      </div>
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