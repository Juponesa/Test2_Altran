<?php while ($posts->have_posts()) : $posts->the_post(); ?>
    <div class="col-md-3">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <figure class="img-responsive"><?php the_post_thumbnail('third-thumb'); ?>
                <div class="category-second-line">
                    <?php the_category(); ?>
                </div>
            </figure>
            <a href="<?php echo get_permalink() ?>"><?php the_title('<h4 class="post-title-h4-second-line">',
                    '</h4>'); ?></a>
            <?php the_excerpt(); ?>
        </div>
        <h5 class="after-post-h5">+TROLLER T4 X JEEP RENEGADE</h5>
    </div>
<?php endwhile; ?>