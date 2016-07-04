<?php
/* Disable WordPress Admin Bar. */
show_admin_bar(false);

/* Add import CSS file*/
function _import()
{
    _register_style('dosis', 'https://fonts.googleapis.com/css?family=Dosis');
    _register_style('style', css_url() . '/style.css');

    _register_script('app', js_url() . '/app.js', array('jquery'));
}

add_action('wp_enqueue_scripts', '_import', 10);

function _register_style($handle, $src, $depts = array(), $ver = null, $media = false)
{
    wp_dequeue_style($handle);
    wp_deregister_style($handle);
    wp_register_style($handle, $src, $depts, $ver, $media);
    wp_enqueue_style($handle);
}

function _register_script($handle, $src, $depts = array(), $ver = null, $in_footer = true)
{
    wp_dequeue_script($handle);
    wp_deregister_script($handle);
    wp_register_script($handle, $src, $depts, $ver, $in_footer);
    wp_enqueue_script($handle);
}

function css_url()
{
    return get_template_directory_uri() . '/css';
}

function js_url()
{
    return get_template_directory_uri() . '/js';
}

function img_url()
{
    return get_template_directory_uri() . '/img';
}


/* Register Menus */
register_nav_menu('main', 'Main Navigation');

/* Ad Widget Top */
register_sidebar(array(
    'name' => 'Ad Widget Top',
    'id' => 'ad-widget-top',
));

/* Ad Widget Square */
register_sidebar(array(
    'name' => 'Ad Widget Square',
    'id' => 'ad-widget-square',
));

/* Thumbnails Sizes */

add_theme_support('post-thumbnails');

add_image_size('first-thumb', 1024, 9999);
add_image_size('second-thumb', 512, 9999);
add_image_size('third-thumb', 512, 9999);


function sm_custom_meta()
{
    add_meta_box('sm_meta', __('Featured Posts', 'sm-textdomain'), 'sm_meta_callback', 'post');
}

function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );

	?>
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) {checked( $featured['meta-checkbox'][0], 'yes' );} ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>

    </div>
</p>

    <?php
}

add_action('add_meta_boxes', 'sm_custom_meta');
?>

<?php
/**
 * Saves the custom meta input
 */
function sm_meta_save($post_id)
{

    // Checks save status
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['sm_nonce']) && wp_verify_nonce($_POST['sm_nonce'],
            basename(__FILE__))) ? 'true' : 'false';

    // Exits script depending on save status
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

    // Checks for input and saves
    if (isset($_POST['meta-checkbox'])) {
        update_post_meta($post_id, 'meta-checkbox', 'yes');
    } else {
        update_post_meta($post_id, 'meta-checkbox', '');
    }

}

add_action('save_post', 'sm_meta_save');
?>
