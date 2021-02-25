<div class="options-container">
    <div class="show-options">
        <span>Options</span>
        <i class="fas fa-caret-right"></i>
    </div>
    <div class="options">
        <div class="sort">
            <p>Sort By</p>
            <a href="?sort=fullname">
                <span>Name</span>
            </a>
            <a href="?sort=datetime">
                <span>Date</span>
            </a>
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