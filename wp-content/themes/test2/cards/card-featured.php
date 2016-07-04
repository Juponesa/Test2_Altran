<?php
$args = array(
    'posts_per_page' => 1,
    'meta_key' => 'meta-checkbox',
    'meta_value' => 'yes',
);
$featured = new WP_Query($args);

while ($featured->have_posts()): $featured->the_post(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <figure class="img-responsive"><?php the_post_thumbnail('first-thumb'); ?>
            <div class="category-featured">
                <?php the_category(); ?>
            </div>
            <a href="<?php echo get_permalink() ?>"><?php the_title('<h4 class="post-title-h4">',
                    '</h4>'); ?></a>
        </figure>

    </div>
<?php endwhile; ?>