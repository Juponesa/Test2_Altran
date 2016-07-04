<?php $posts->the_post() ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure class="img-responsive"><?php the_post_thumbnail('first-thumb'); ?>
        <div class="category-first-post">
            <?php the_category(); ?>
        </div>
    </figure>
    <a href="<?php echo get_permalink() ?>"><?php the_title('<h4 class="post-title-h4-first-post">',
            '</h4>'); ?></a>
</div>