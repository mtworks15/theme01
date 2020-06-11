<?php

/*
    Template Name: Cosmetics Search
*/

$terms = get_terms( array(

    'taxonomy' => 'brands',
    'hide_empty' => false, // set false to include those terms that has no posts

));

$is_search = count( $_GET ); // count if there are parameters [true] then run the search query else [false] don't run it.

if ($is_search) { // without this all the posts will be display at first load
    $query = custom_search_query();
}

?>

<?php get_header(); ?>

    <div id="mainContainer">
        <div id="pageNavbarOverlay"></div>
        <div class="container mt-4 mb-5">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="<?php echo home_url('/cosmetics-search'); // you need to echo this to reset back to its original url in case of searching again and you're in specific result page (pagination), else you won't find any search results because the action property is empty ?>">
                        <div class="form-group">
                            <label>Keyword</label>
                            <input 
                                type="text" 
                                value="<?php echo (isset($_GET['keyword']) ? $_GET['keyword'] : ''); ?>" 
                                name="keyword" 
                                placeholder="Type your Keyword here" 
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Brands</label>
                            <select name="brand" class="form-control">
                                <option value="">Choose your Brand</option>
                                <?php foreach($terms as $term) : ?>
                                    <option 
                                        <?php if (isset($_GET['brand']) && ($_GET['brand'] == $term->slug)) : ?>
                                            selected
                                        <?php endif; ?>
                                        value="<?php echo $term->slug; ?>">
                                        <?php echo $term->name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>From Price</label>
                                <select name="price_above" class="form-control">
                                    <?php for ($i=0; $i<500; $i+=20) : ?>
                                    <option 
                                        <?php if (isset($_GET['price_above']) && ($_GET['price_above'] == $i)) : ?>
                                            selected
                                        <?php endif; ?>
                                        value="<?php echo $i; ?>">
                                        <?php echo '$' . number_format($i, 2); ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>To Price</label>
                                <select name="price_below" class="form-control">
                                    <?php for ($i=0; $i<500; $i+=20) : ?>
                                    <option 
                                        <?php if (isset($_GET['price_below']) && ($_GET['price_below'] == $i)) : ?>
                                            selected
                                        <?php elseif (!isset($_GET['price_below']) && ($i === 480)) : ?>
                                            selected
                                        <?php endif; ?>
                                        value="<?php echo $i; ?>">
                                        <?php echo '$' . number_format($i, 2); ?>
                                    </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                        <a href="<?php echo home_url('/cosmetics-search'); ?>">Reset</a>
                    </form>
                </div>
            </div>

            <?php if ($is_search) : ?>
            
            <?php if ($query->have_posts()) : ?>

                <div class="row card-row mt-3"> 

                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 mb-5">
                            <div class="card">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <img class="card-img-top" src="<?php the_post_thumbnail_url('img-xs-square'); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <div class="card-title"><h5><?php the_title(); ?></h5></div>
                                    <p class="mb-0">$<?php the_field('price'); ?></p>
                                    <p class="mb-3"><?php the_field('size'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>    
                    
                    <?php endwhile; ?>

                </div>

                <div class="pagination">
                    <?php 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                    ?>
                </div>

                <?php wp_reset_postdata(); // to set the query back to default ?>

            <?php else: ?>

                <div class="clearfix mb-3"></div>

                <div class="alert alert-danger">There are no results</div>
                
            <?php endif; ?>

            <?php endif; ?>
            
        </div>
    </div>

<?php get_footer(); ?>