<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <title>Profile</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <div class="container">
    <div class="content-container profile">
      <div class="heading">
        <h2>Profile</h2>
        <a href="./func/logout.php" class="show">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </div>
      <form method="POST" action="./func/update-profile.php" class="card borderless profile-card">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" value="admin" required />
        <label for="curpass">Current Password</label>
        <input type="password" name="curpass" required />
        <label for="newpass">New Password</label>
        <input type="password" name="newpass" autocomplete="off" />
        <label for="conpass">Confirm Password</label>
        <input type="password" name="conpass" autocomplete="off" />
        <button>Save Changes</button>
      </form>
    </div>
  </div>
</body>

</html>