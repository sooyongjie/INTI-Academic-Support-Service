<input type="hidden" value="<?php echo $_SESSION['offset'] ?>" name="offset" id="offset">
<input type="hidden" value="<?php echo $_SESSION['limit'] ?>" name="limit" id="limit">
<form class="pagination">
    <?php
    if ($_SESSION['offset'] != 0 && $_SESSION['offset'] % $_SESSION['limit'] == 0) {
    } else {
    } ?>
    <?php
    if ($_SESSION['page'] == 1) { ?>
        <button class="pagination-disabled">
            <i class="fas fa-angle-left"></i>
        </button>
    <?php } else { ?>
        <button type="button" onclick="minusOffset()">
            <i class="fas fa-angle-left pagination-enabled"></i>
        </button>
    <?php } ?>
    <input type="hidden" value="<?php echo $_SESSION['page'] ?>" name="page" id="page-input">
    <input type="number" value="<?php echo $_SESSION['page'] ?>" name="decoy">
    <?php
    if ($_SESSION['page'] >= $_SESSION['totalPages']) { ?>
        <button type="button" class="pagination-disabled">
            <i class="fas fa-angle-right"></i>
        </button>
    <?php } else { ?>
        <button type="button" onclick="addOffset()">
            <i class="fas fa-angle-right pagination-enabled"></i>
        </button>
    <?php } ?>
</form>