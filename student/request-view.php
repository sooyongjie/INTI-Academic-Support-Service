<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INTI Academic Services</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?&family=Roboto:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <!-- <link rel="stylesheet" href="../css/student/student.css" /> -->
    <link rel="stylesheet" href="../css/student/student.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
</head>

<body>
    <nav>
        <a class="nav-back" onclick="goBack()">
            <!-- <i class="fas fa-arrow-left"></i>
            <span class="nav-item">Back</span> -->
        </a>
        <a href="./home.html" class="logo">
            <img src="../img/inti-logo-half.svg" class="inti-logo" alt="" />
        </a>
        <div class="nav-user">
            <a class="nav-item">sooyongjie</a>
            <i class="fas fa-caret-down"></i>
            <!-- Dropdown -->
            <div class="user-dropdown">
                <label>Settings</label>
                <button type="button" id="theme-btn">
                    <span>Toggle Theme</span>
                    <i class="fad fa-sun" id="theme-icon" id="theme-icon"></i></button>
                <hr />
                <a href="./profile.html">Account Details</a>
                <a href="./">Sign out</a>
            </div>
        </div>
    </nav>
    <div class="loading-screen">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
    <div class="container">
        <div class="card request">
            <div class="heading">
                <h2>Request #10001</h3>
            </div>
            <label for="">Programme</label>
            <p>University of Wollongong</p>
            <label for="">Course Code</label>
            <p>CSIT321</p>
            <label for="">Session</label>
            <p>July 2019</p>
            <label for="">Status</label>
            <p>Pending</p>
            <label for="">Total Amount</label>
            <p>RM1</p>
        </div>
        <div class="payment">
            <div class="heading">
                <h2>Payment Method</h2>
            </div>
            <p>Bank Transfer only</p>
            <div class="card">
                <div class="payment-info">
                    <img src="../img/mb.png" alt="">
                    <div>
                        <p>Soo Yong Jie</p>
                        <p>10988333</p>
                    </div>
                    <a href="https://www.maybank2u.com.my/">
                        <i class="fas fa-external-link-square-alt"></i>
                    </a>
                </div>
                <div class="payment-info">
                    <img src="../img/pb.png" alt="">
                    <div>
                        <p>Soo Yong Jie</p>
                        <p>10988333</p>
                    </div>
                    <a href="https://www2.pbebank.com/myIBK/apppbb/servlet/">
                        <i class="fas fa-external-link-square-alt"></i>
                    </a>
                </div>
            </div>
            <div class="heading">
                <h2>Payment Details</h3>
            </div>
            <label for="receipt-input" class="receipt-input">
                <i class="fas fa-upload"></i>
                <span>Upload Receipt</span>
                <input type="file" name="" id="receipt-input">
            </label>

        </div>
    </div>
    <div class="toast-container">
        <div class="toast">
            <span class="toast-message">Welcome 👋🏻</span>
            <div class="close-btn-container">
                <button onclick="clearToast()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</body>
<footer>
    <p class="copyright">© 2021 INTI International University & Colleges</p>
</footer>
<script src="js/script.js"></script>
<script src="js/theme.js"></script>
<script src="js/upload-files.js"></script>

</html>