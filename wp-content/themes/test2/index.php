<?php get_header(); ?>

<?php
$args = array(
    'posts_per_page' => 7,
    'meta_key' => 'meta-checkbox',
    'meta_value' => false,
);
$posts = new WP_Query($args); ?>

<div class="first-line">

    <!-- First post-->
    <div class="col-md-5">
        <?php include "cards/card-lg.php" ?>
    </div>

    <div class="col-md-7">

        <!--Second post-->
        <div class="col-md-6">
            <?php include "cards/card-md.php" ?>
        </div>

        <!--Ad Widget Square-->
        <div class="col-md-6">
            <div class="text-center ad-widget-square">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('ad-widget-square')) : ?>
                    <p>Ad widget 300px x 250px</p>
                <?php endif; ?>
            </div>
        </div>

        <!--Third post-->
        <div class="col-md-6">
            <?php include "cards/card-md.php" ?>
        </div>

        <!--Featured post-->
        <div class="col-md-6">
            <?php include "cards/card-featured.php" ?>
        </div>
    </div>
</div>

<div class="second-line">
    <?php include "cards/card-sm.php" ?>
</div>

<?php get_footer(); ?>
