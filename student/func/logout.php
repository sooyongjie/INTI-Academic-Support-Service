<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");



//destroy session and navigate back to login page
?>