<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OPTCL
 */
$lang = pll_current_language();

$title=get_the_title();

// Assuming 'my_custom_post_type' is the name of your custom post type
$post_type = 'optcl-product';

$postID=0;
if($lang == 'en'){
// Get the post object by title and post type
$post = get_page_by_path($title, OBJECT, $post_type);
$postID = $post->ID;
}else{
    $args = array(
        'post_type' => 'optcl-product', // Replace 'your_post_type' with the name of your custom post type
        'meta_query' => array(
            array(
                'key' => 'name_ar', // Replace 'your_acf_field_name' with the name of your ACF field
                'value' => $title, // Replace 'desired_field_value' with the value you want to match
                'compare' => '=' // Change the comparison operator as needed (e.g., '=', '!=', '>', '<', 'LIKE')
            )
        )
    );
    
    $posts = new WP_Query($args);
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            // Display your post content here
            $postID=get_the_ID();
        }
        wp_reset_postdata();
    }
}

// The URL you want to redirect to
$redirect_url = '';

if($lang == 'en'){
    $redirect_url=home_url('/en/optcl-products/?id='.$postID);
}else{
    $redirect_url=home_url('/منتجات/?id='.$postID);
}

// Perform the redirect
wp_redirect($redirect_url);

// It's important to exit after wp_redirect to prevent further execution
exit;
?>


		<div class="spacer-120"></div>


<?php
get_footer();
