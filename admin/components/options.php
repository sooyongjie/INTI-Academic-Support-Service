<div class="options-container">
    <div class="show-options">
        <span>Options</span>
        <i class="fas fa-caret-right"></i>
    </div>
    <div class="options">
        <div class="sort">
            <p>Sort By</p>
            <a href="?sort=name">
                <span>Name</span>
            </a>
            <a href="?sort=date">
                <span>Date</span>
            </a>
        </div>
        <form method="GET" class="offset-form">
            <span>Show</span>
            <input type="number" name="entries" value="5" required />
            <span>entries</span>
        </form>
        <form class="search">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </form>
    </div>
</div>