<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <title>Requests</title>
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