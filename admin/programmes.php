<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once('./components/head.php') ?>
  <title>Programmes</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <div class="container">
    <div class="content-container">
      <?php include_once('./components/options.php') ?>
      <div class="heading">
        <h2>Programmes</h2>
        <button>
          <i class="fas fa-plus"></i>
          <span>New Programme</span>
        </button>
      </div>
      <div class="heading">
        <h3>University of Wollongong</h3>
        <button>
          <i class="fas fa-plus"></i>
          <span>New Subject</span>
        </button>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>Subject</th>
            <th>Code</th>
            <th>Price</th>
            <th>File</th>
          </tr>
          <tr>
            <td>System Design</td>
            <td>CSCI334</td>
            <td>RM1</td>
            <td class="status">
              <span class="file">csci334.pdf</span>
              <a href="" class="arrow">
                <i class="fas fa-file-upload"></i>
              </a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>