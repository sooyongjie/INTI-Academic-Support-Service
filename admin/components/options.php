<div class="options-container">
    <div class="show-options">
        <span>Options</span>
        <i class="fas fa-caret-right"></i>
    </div>
    <div class="options">
        <div class="sort">
            <p>Sort By</p>
            <?php printSortButton("fullname", "Name") ?>
            <?php printSortButton("datetime", "Date") ?>
        </div>
        <form method="post" class="offset-form">
            <label for="entries">Show</label>
            <input type="number" name="entries" value="5" id="entries" />
            <span>entries</span>
        </form>
        <form method="get" class="search">
            <input type="text" name="id" placeholder="Search">
            <i class="fas fa-search"></i>
        </form>
    </div>
</div>

<?php

function printSortButton($sort, $name)
{
    if (isset($_GET['sort']) && ($_GET['sort'] == $sort)) { ?>
        <a href="?">
            <span><?php echo $name ?></span>
            <i class="fas fa-times-circle"></i>
        </a>
    <?php } else { ?>
        <a href="?sort=<?php echo $sort ?>">
            <span><?php echo $name ?></span>
        </a>
<?php }
}

?>