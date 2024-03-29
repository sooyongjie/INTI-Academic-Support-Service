<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <?php include_once('./func/programmes.php') ?>
  <title>Programmes</title>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <div class="container">
    <div class="content-container">
      <?php include_once('./components/options.php') ?>
      <div class="heading">
        <h2>Programmes</h2>
        <button onclick="showModal(1)">
          <i class="fas fa-plus"></i>
          <span>New Programme</span>
        </button>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>ID</th>
            <th>Programme</th>
          </tr>
          <?php showProgrammes() ?>
        </table>
      </div>
    </div>
  </div>
  </div>
  <div class="modal-container prog-form">
    <div class="modal form">
      <div class="heading">
        <h3>New programme</h3>
      </div>
      <div class="modal-body">
        <form action="./func/programmes.php" method="GET" class="new-form">
          <label for="">Name</label>
          <input type="text" name="progName" placeholder="University">
          <div class="buttons">
            <button class="cancel-btn" type="button" onclick="hideModal(1)">
              <span>Cancel</span>
            </button>
            <button>
              <span>Confirm</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="./js/modal.js"></script>

</html>