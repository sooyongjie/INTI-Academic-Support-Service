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

<body class="login">
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
        <div class="login-container">
            <img src="../img/inti-logo-full.svg" alt="">
            <h2 class="welcome">Welcome</h3>
                <p>Enter login details here or create an account.</p>
                <form action="" autocomplete="off">
                    <div class="row-container">
                        <label for="">Username</label>
                    </div>
                    <input type="text" value="sooyongjie" autocomplete="off">
                    <div class="row-container">
                        <label for="">Password</label>
                        <a href="">Forgot Password</a>
                    </div>
                    <input type="password" value="poopandpee" autocomplete="off">
                    <div class="row-container">
                        <button type="button" onclick="window.location.href='./requests.php'">Login</button>
                        <a href="">Sign up here</a>
                    </div>
                </form>
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

    fetch(api)
        .then(response => {
            if (!response.ok) {
                alert("What happened.")
            }
            return response.json();
        })
        .then(data => {
            quote.textContent = `"${data.content} "`
            author.textContent = `- ${data.author}`
            gsap.to(["#quote", "#author"], {
                opacity: "1",
                stagger: 1,
            });
        })
</script>

</html>