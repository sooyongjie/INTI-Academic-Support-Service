<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <!-- Fonts -->
    <link rel="preload stylesheet" as="style" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?&family=Roboto:wght@300;400;500;700&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <!-- <script src="./js/theme.js"></script> -->
</head>

<body class="index">
    <div class="modal-container">
        <div class="modal registration">
            <div class="heading">
                <h3></h3>
                <i class="fas fa-times"></i>
            </div>
            <img src="../img/mailbox.png" alt="">
            <div class="modal-body">
                <h3>Check your email</h3>
                <p>We emailed a confirmation link to your email.</p>
                <button>
                    <span>Resend</span>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="img-container">
            <div class="content-container">
                <div class="logo-container">
                    <img src="../img/inti-logo-half-dark.svg" class="logo" alt="">
                </div>
                <div class="bottom">
                    <h3 id="quote"></h3>
                    <h3 id="author"></h3>
                </div>
            </div>
        </div>
        <div class="container-container">
            <div id="login-form" class="form">
                <img src="../img/inti-logo-full.svg" alt="">
                <div class="heading">
                    <h2 class="heading-txt">Welcome</h2>
                    <p class="subheading">Enter login details here or create an account.</p>
                </div>
                <form method="POST" action="./func/login.php">
                    <div class="row-container">
                        <label for="">Username</label>
                    </div>
                    <input type="text" name="email" value="sooyongjie@gmail.com" autocomplete="off">
                    <div class="row-container">
                        <label for="">Password</label>
                        <a href="">Forgot Password</a>
                    </div>
                    <input type="password" name="password" value="poopandpee" autocomplete="off">
                    <div class="row-container">
                        <!-- <button type="button" onclick="window.location.href='./home.php'">Login</button> -->
                        <button type="submit"">Login</button>
                        <!-- <input type="submit" name="Login" onclick="check(this.form)" value="Login"> -->
                        <a id="register-btn">Sign up here</a>
                    </div>
                </form>
            </div>
            <div id="register-form" class="form">
                <img src="../img/inti-logo-full.svg" alt="">
                <div class="heading">
                    <h2 class="heading-txt">Register</h2>
                    <p class="subheading">Please enter the correct information.</p>
                </div>
                <form action="" autocomplete="off">
                    <div class="input-row">
                        <div>
                            <div class="row-container">
                                <label for="">Full name</label>
                            </div>
                            <input type="text" value="Soo Yong Jie" autocomplete="off">
                        </div>
                        <div>
                            <div class="row-container">
                                <label for="">Username</label>
                            </div>
                            <input type="text" value="sooyongjie" autocomplete="off">
                        </div>
                    </div>
                    <div class="row-container">
                        <label for="">Email</label>
                    </div>
                    <input type="text" name="email" value="sooyongjie@gmail.com">
                    <div class="row-container">
                        <label for="">Password</label>
                    </div>
                    <input type="password" value="poopandpee" autocomplete="off">
                    <div class="row-container">
                        <a id="login-btn">Have an account? Login here</a>
                        <!-- <button type="button" onclick="modal()">Sign up</button> -->
                        <button type="submit">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    // if (window.location.protocol != "https:") {
    //     var proxy = "https://cors-anywhere.herokuapp.com/"
    //     var api = `${proxy}https://api.quotable.io/random?tags=inspirational`
    // } else {
    //     var api = `https://api.quotable.io/random?tags=inspirational`
    // }
    var api = `https://api.quotable.io/random?tags=inspirational`
    const quote = document.querySelector('#quote')
    const author = document.querySelector('#author')

    const registerFormBtn = document.getElementById('register-btn');
    const registerForm = document.getElementById('register-form');
    const loginFormBtn = document.getElementById('login-btn');
    const loginForm = document.getElementById('login-form');

    registerFormBtn.addEventListener('click', () => {
        hideElement(loginForm)
        showElement(registerForm)
        setTimeout(() => {
            document.body.classList.toggle('register')
        }, 100);
        gsap.to(["#quote", "#author"], {
            opacity: "0",
            duration: "0"
        });
    });

    loginFormBtn.addEventListener('click', () => {
        hideElement(registerForm)
        showElement(loginForm)
        setTimeout(() => {
            document.body.classList.toggle('register')
        }, 100);
        gsap.to(["#quote", "#author"], {
            delay: "0.6",
            opacity: "1",
            duration: "0.2"
        });
    });

    hideElement = (el) => {
        el.style.opacity = '0'
        el.style.zIndex = '-1'

    }

    showElement = (el) => {
        setTimeout(() => {
            el.style.opacity = '1'
            el.style.zIndex = '1'
        }, 500);
    }

    fetch(api)
        .then(response => {
            if (!response.ok) {
                alert("Error 69")
            }
            return response.json();
        })
        .then(data => {
            quote.textContent = `"${data.content} "`
            author.textContent = `- ${data.author}`
            gsap.to(["#quote", "#author"], {
                opacity: "1",
            });
        })


    window.addEventListener("load", function() {
        gsap.to("#login-form", {
            delay: "0.3",
            opacity: "1",
            duration: "0.4"
        });
    });

    modal = () => {
        document.querySelector('.modal-container').style.display = "flex"
        gsap.to(".modal-container", {
            opacity: "1",
            duration: "0."
        });
    }

    //login validation 
    function validate() {
        var $valid = true;
        document.getElementById("checkEmail").innerHTML = "";
        document.getElementById("checkPassword").innerHTML = "";

        var userName = document.getElementByName("getEmail").value;
        var password = document.getElementByName("getPass").value;
        if (userName == "") {
            document.getElementById("checkEmail").innerHTML = "required";
            $valid = false;
        }
        if (password == "") {
            document.getElementById("checkPassword").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
</script>

</html>