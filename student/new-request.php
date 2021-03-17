<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/head.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
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
      <input class="chosen-value prog-input" type="text" value="" placeholder="Search programme">
      <ul class="value-list prog-list">
        <a class="value prog-value">Swinburne University of Technology</a>
        <a class="value prog-value">University of Wollongong</a>
        <a class="value prog-value">University Coventry</a>
      </ul>
      <label for="session">Session</label>
      <input class="chosen-value sess-input" type="text" value="" placeholder="Search session">
      <ul class="value-list sess-list">
        <a class="value sess-value">July 2019</a>
        <a class="value sess-value">February 2020</a>
        <a class="value sess-value">July 2020</a>
        <a class="value sess-value">February 2021</a>
      </ul>
      <label for="course-code">Course</label>
      <input class="chosen-value sub-input" type="text" value="" placeholder="Search course">
      <ul class="value-list sub-list">
        <a class="value sub-value">CSIT321 Project</a>
        <a class="value sub-value">ISIT315 Web Modelling</a>
      </ul>
    </div>
    <div class="button-row section">
      <button onclick="getSubject()">
        <i class="fas fa-plus"></i>
        <span>Add</span>
      </button>
      <button>
        <i class="fas fa-check"></i>
        <span>Done</span>
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