<form action="/testsite" method="get">
    <label for="search">Search:</label>
    <?php
    $arrSearch = get_query_var( 'searchVar' );
    foreach ( $arrSearch as $key => $value ) : ?>
        <input type="hidden" name="<?php echo $value['name']; ?>" value="<?php echo $value['val']; ?>">
    <?php endforeach; ?>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
    <button type="submit">Search</button>
</form>