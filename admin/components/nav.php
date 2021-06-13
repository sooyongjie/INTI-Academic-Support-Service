<nav>
    <a class="admin-logo-link" href="./requests.php">
        <img class="admin-logo" src="../img/inti-logo-half.svg" alt="Loading logo..." height="42.375" width="140" />
    </a>
    <div class="nav-items">
        <!-- <button class="active"> -->
        <button class="nav-links" id="requests" onclick="window.location.href='./requests.php'">
            <i class="fas fa-clipboard-list"></i>
            <span>Requests</span>
        </button>
        <button class="nav-links" id="payment" onclick="window.location.href='./payment.php'">
            <i class="far fa-credit-card"></i>
            <span>Payment</span>
        </button>
        <button class="nav-links" id="programmes" onclick="window.location.href='./programmes.php'">
            <i class="fas fa-book"></i>
            <span>Programmes</span>
        </button>
        <!-- <button class="nav-notification nav-links" id="notifications" onclick="window.location.href='./notifications.php'">
            <i class="fas fa-bell"></i>
            <span>Notifications</span>
        </button> -->
    </div>
    <hr />
    <div class="nav-profile">
        <button class="nav-links" id="profile" onclick="window.location.href='./profile.php'">
            <i class="fas fa-user-circle"></i>
            <span>Soo Yong Jie</span>
        </button>
    </div>
</nav>
<?php include_once('./components/spinner.php') ?>

<script>
    var segment_array = window.location.pathname.split('/');
    var currPage = segment_array.pop().slice(0, -4);; // remove '.php'

    var navLinks = document.querySelectorAll('.nav-links')
    for (i = 0; i < navLinks.length; i++) {
        if (navLinks[i].id.match(currPage)) {
            navLinks[i].classList.add("active");
            break;
        }
    }
</script>