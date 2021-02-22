<div class="options-container">
    <div class="show-options">
        <span>Options</span>
        <i class="fas fa-caret-right"></i>
    </div>
    <div class="options">
        <div class="sort">
            <p>Sort By</p>
            <form method="GET">
                <input type="hidden" name="sort" value="name" />
                <button type="submit">
                    <span>Name</span>
                </button>
            </form>
            <form method="GET">
                <input type="hidden" name="sort" value="date" />
                <button type="submit">
                    <span>Date</span>
                </button>
            </form>
        </div>
        <form method="GET">
            <span>Show</span>
            <input type="number" name="entries" value="5" required />
            <span>entries</span>
        </form>
    </div>
</div>