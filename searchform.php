<form action="/testsite" method="get">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
    <button type="submit">Search</button>
</form>