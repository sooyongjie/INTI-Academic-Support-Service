<!-- Primary Meta Tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
<title>INTI Academic Services</title>
<meta name="title" content="INTI Academic Services — Purchase Course Structure">
<meta name="description" content="⚒ Site Under Construction ⚒">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://intiacademicsupportservices.000webhostapp.com/">
<meta property="og:title" content="INTI Academic Services — Purchase Course Structure">
<meta property="og:description" content="⚒ Site Under Construction ⚒">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://intiacademicsupportservices.000webhostapp.com/">
<meta property="twitter:title" content="INTI Academic Services — Purchase Course Structure">
<meta property="twitter:description" content="⚒ Site Under Construction ⚒">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Misc -->
<link rel="preload stylesheet" as="style" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?&family=Roboto:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
<!-- <link rel="stylesheet" href="../css/fontawesome/all.min.css" /> -->
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/student/student.css" />
<link rel="stylesheet" href="../css/student/student-dark.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>

<?php
session_start();
if(!isset($_SESSION['user']['uid'])) {
    header("Location: ./index.php");
  }
?>