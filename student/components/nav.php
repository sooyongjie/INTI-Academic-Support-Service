<nav>
    <a class="nav-back" onclick="goBack()">
        <i class="fas fa-arrow-left"></i>
        <span class="nav-item">Back</span>
    </a>
    <a href="./home.html" class="logo">
        <img src="../img/inti-logo-half.svg" class="inti-logo" alt="" />
    </a>
    <div class="nav-user">
        <a class="nav-item nav-username">
            <i class="fas fa-user"></i>
            <span class="username">User</span>
        </a>
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