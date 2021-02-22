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
        <h3>Pending Requests</h3>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>Soo Yong Jie</td>
            <td>2020/12/26</td>
            <td>3:12pm</td>
            <td class="status">
              <span>Pending</span>
              <a href="" class="arrow">
                <i class="fas fa-arrow-right"></i>
              </a>
            </td>
          </tr>
        </table>
      </div>
      <!--  -->
      <div class="heading">
        <h3>All Requests</h3>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>Soo Yong Jie</td>
            <td>2020/12/26</td>
            <td>3:12pm</td>
            <td class="status">
              <span>Pending</span>
              <a href="" class="arrow">
                <i class="fas fa-arrow-right"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>Soo Yong Jie</td>
            <td>2020/12/26</td>
            <td>3:12pm</td>
            <td class="status">
              <span>Pending</span>
              <a href="" class="arrow">
                <i class="fas fa-arrow-right"></i>
              </a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>