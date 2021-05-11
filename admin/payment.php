<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <title>Payment</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./func/func.php') ?>
  <?php include_once('./func/payment.php') ?>
  <div class="container">
    <div class="content-container">
      <?php include_once('./components/options.php') ?>
      <div class="heading">
        <h2>Payment</h2>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
          <?php payment() ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>