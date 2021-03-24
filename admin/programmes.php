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
        <button onclick="showModal('prog')">
          <i class="fas fa-plus"></i>
          <span>New Programme</span>
        </button>
      </div>
      <div class="heading">
        <h3>University of Wollongong</h3>
        <button onclick="showModal('sub')">
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
  <div class="modal-container prog-form">
    <div class="modal form">
      <div class="heading">
        <h3>New programme</h3>
      </div>
      <div class="modal-body">
        <form action="" class="new-form">
          <label for="">Name</label>
          <input type="text" name="progName" placeholder="University">
          <div class="buttons">
            <button class="cancel-btn">
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
  <div class="modal-container sub-form">
    <div class="modal form">
      <div class="heading">
        <h3>New subject</h3>
      </div>
      <div class="modal-body">
        <form action="" class="new-form">
          <label for="">Name</label>
          <input type="text" name="progName" placeholder="Subject name">
          <div class="buttons">
            <button class="cancel-btn">
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