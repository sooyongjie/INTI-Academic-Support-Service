<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/admin/admin.css" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <nav>
    <a href="./requests.html">
      <img class="admin-logo" src="../img/inti-logo.png" alt="" />
    </a>
    <div class="nav-items">
      <button class="" onclick="window.location.href='requests.html'">
        <i class="fas fa-clipboard-list"></i>
        <span>Requests</span>
      </button>
      <button class="" onclick="window.location.href='payment.html'">
        <i class="far fa-credit-card"></i>
        <span>Payment</span>
      </button>
      <button class="" onclick="window.location.href='programmes.html'">
        <i class="fas fa-book"></i>
        <span>Programmes</span>
      </button>
      <button class="nav-notification" onclick="window.location.href='notifications.html'">
        <i class="fas fa-bell"></i>
        <span>Notifications</span>
      </button>
    </div>
    <hr />
    <div class="nav-profile">
      <button class="active" onclick="window.location.href='profile.html'">
        <i class="fas fa-user-circle"></i>
        <span>Soo Yong Jie</span>
      </button>
    </div>
  </nav>
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
        <h1>Profile</h1>
        <a href="./index.html" class="show">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </div>
      <form class="card borderless profile-card">
        <label for="">Username</label>
        <input type="text" name="inti-username" placeholder="Username" value="Soo Yong Jie" required />
        <label for="">Current Password</label>
        <input type="password" name="inti-password" required />
        <label for="">New Password</label>
        <input type="password" autocomplete="off" />
        <label for="">Confirm Password</label>
        <input type="password" autocomplete="off" />
        <button>Save Changes</button>
      </form>
    </div>
  </div>
</body>

</html>