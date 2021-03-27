<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <?php include_once('./components/spinner.php') ?>

  <div class="container row request-form">
    <div class="card form section">
      <div class="heading">
        <h2>Request Form</h2>
      </div>

      <label for="programme">Programme</label>
      <input class="chosen-value prog-id" type="hidden" value="10001">
      <input class="chosen-value prog-input" type="text" value="University of Wollongong" placeholder="Search programme">
      <ul class="value-list prog-list">
        <input class="value prog-value" value="University of Wollongong" id="10001" readonly />
      </ul>
      <label for="session">Session</label>
      <input class="chosen-value sess-id" type="hidden" value="10001">
      <input class="chosen-value sess-input" type="text" value="July 2019" placeholder="Search session">
      <ul class="value-list sess-list">
        <input class="value sess-value" value="July 2019" id="10001" readonly />
      </ul>
      <label for="course-code">Course</label>
      <input class="chosen-value sub-id" type="hidden" value="10001">
      <input class="chosen-value sub-input" type="text" value="CSIT321 Project" placeholder="Search course">
      <ul class="value-list sub-list">
        <input class="value sub-value" value="CSIT321 Project" id="10001" readonly />
      </ul>
    </div>

    <div class="button-row section">
      <button class="add-btn active" onclick="getSubject()">
        <i class="fas fa-plus"></i>
        <span>Add</span>
      </button>
      <button class="done-btn" onclick="submitForm()">
        <div class="count-div">
          <span class="count-text"></span>
        </div>
        <span>Next</span>
      </button>
    </div>
  </div>

  <?php include_once('./components/toast.php') ?>
  <?php include_once('./components/fab.php') ?>
  <?php include_once('./components/scroll-to-top.php') ?>
</body>
<?php include_once('./components/footer.php') ?>

<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/new-request.js"></script>
<script src="js/dropdown.js"></script>

</html>