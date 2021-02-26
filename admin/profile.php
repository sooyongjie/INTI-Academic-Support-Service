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