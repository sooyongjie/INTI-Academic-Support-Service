<div class="toast-container">
    <div class="toast">
        <span class="toast-message">
            <?php
            if (isset($_SESSION['toast'])) {
                echo $_SESSION['toast'];
                unset($_SESSION['toast']);
            ?>
                <script src="./js/toast.js"></script>
            <?php
            }
            ?>
        </span>
        <div class="close-btn-container">
            <button onclick="clearToast()">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
</div>