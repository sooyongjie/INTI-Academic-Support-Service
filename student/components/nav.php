<nav>
    <a href="#top"></a>
    <a class="nav-back" onclick="goBack()">
        <i class="fas fa-arrow-left"></i>
        <span class="nav-item">Back</span>
    </a>
    <a href="./home.php" class="logo">
        <img src="../img/inti-logo-half.svg" class="inti-logo" alt="INTI Logo" height="auto" width="100px" />
        <!-- <img src="https://via.placeholder.com/100" class="inti-logo" alt="INTI Logo" height="auto" width="100px" /> -->
    </a>
    <div class="nav-user">
        <div class="nav-item nav-username">
            <i class="fas fa-user-circle"></i>
            <span class="username">sooyongjie</span>
        </div>
        <i class="fas fa-caret-down"></i>
        <!-- Dropdown -->
        <div class="user-dropdown">
            <label>Settings</label>
            <button type="button" id="theme-btn">
                <span>Toggle Theme</span>
                <i class="fad fa-sun" id="theme-icon" id="theme-icon"></i></button>
            <hr />
            <a href="./profile.php">Account Details</a>
            <a href="./">Sign out</a>
        </div>
    </div>
</nav>