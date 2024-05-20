<?php

/**
 * OPTCL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OPTCL
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
define("PATHLOCAL", __DIR__);

// svg support allow
$lang = pll_current_language();
function svg_allow($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'svg_allow');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function optcl_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on OPTCL, use a find and replace
		* to change 'optcl' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('optcl', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'optcl'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'optcl_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'optcl_setup');

// Add custom post types to search


function include_custom_post_type_in_search($query)
{
	if ($query->is_main_query() && $query->is_search() && !is_admin()) {
		$query->set('post_type', array('post', 'page', 'news', 'optclproduct', 'optclproduct'));
	}
}
add_action('pre_get_posts', 'include_custom_post_type_in_search');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function optcl_content_width()
{
	$GLOBALS['content_width'] = apply_filters('optcl_content_width', 640);
}
add_action('after_setup_theme', 'optcl_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function optcl_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Searchbar', 'optcl'),
			'id'            => 'searchbar',
			'description'   => esc_html__('Add widgets here.', 'optcl'),
			'before_widget' => '<div id="%1$s" class="optcl_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="font_mi_26 text_mi_color_blue">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'optcl_widgets_init');

/**
 * Filter the translation url of the current page before Polylang caches it.
 *
 * @param null|string $url The translation url, null if none was found.
 *
 * @return string The modified translation url with query string.
 */
function url_query_string($url)
{
	if (!empty($_SERVER['QUERY_STRING'])) {
		return $url . '?' . $_SERVER['QUERY_STRING'];
	}
	return $url;
}

add_filter('pll_the_language_link', 'url_query_string');


/**
 * Enqueue scripts and styles.
 */
function optcl_scripts()
{
	wp_enqueue_style('optcl-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('optcl-style', 'rtl', 'replace');

	// wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/css/bootstrap.min.css'));
	$maincss = (pll_current_language() == 'en') ? '/css/main.css' : '/css/main-rtl.css';
	$mu_maincss = (pll_current_language() == 'en') ? '/css/stylesheet.css' : '/css/stylesheet_ar.css';
	$styles = array(
		['stylename' => 'bootstrap', 'filepath' => '/css/bootstrap.min.css'],
		['stylename' => 'mainstyle', 'filepath' => $maincss],
		['stylename' => 'navigation', 'filepath' => '/css/navigation.css'],
		['stylename' => 'locomotive-scroll', 'filepath' => '/css/locomotive-scroll.min.css'],
		['stylename' => 'animate', 'filepath' => '/css/animate.css'],
		['stylename' => 'owl-carousel', 'filepath' => '/css/owl.carousel.min.css'],
		['stylename' => 'responsive', 'filepath' => '/css/responsive.css'],
		['stylename' => 'new-sheet', 'filepath' => $mu_maincss],
		['stylename' => 'slick', 'filepath' => '/css/slick.css'],
	);

	// Loop through the $styles array to generate the HTML links
	foreach ($styles as $style) {
		echo '<link rel="stylesheet" href="' . get_template_directory_uri() . $style['filepath'] . '">';
		mapstyles($style['stylename'], $style['filepath']);
	}

	//wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), filemtime(get_template_directory() . '/fonts/fonts.css'));

	wp_enqueue_script('optcl-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('optcl-bootstrap-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);

	wp_enqueue_script('optcl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('optcl-slick', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('optcl-jspdf', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'optcl_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*Custom Post type start*/
function optcl_post_type_news()
{
	// $post_type = 'optclproduct';

	// // Query posts of the specified post type
	// $args = array(
	// 	'post_type' => $post_type,
	// 	'posts_per_page' => -1, // Retrieve all posts of the specified post type
	// );

	// $posts = get_posts($args);

	// // Loop through each post and delete it
	// foreach ($posts as $post) {
	// 	wp_delete_post($post->ID, true); // True parameter will force delete the post permanently
	// }
	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
		'gallery', // picture gallery support
	);
	$labels = array(
		'name' => _x('News', 'plural'),
		'singular_name' => _x('News', 'singular'),
		'menu_name' => _x('News', 'admin menu'),
		'name_admin_bar' => _x('News', 'admin bar'),
		'add_new' => _x('Add New', 'add New'),
		'add_new_item' => __('Add New News'),
		'new_item' => __('New News'),
		'edit_item' => __('Edit News'),
		'view_item' => __('View News'),
		'all_items' => __('All News'),
		'search_items' => __('Search News'),
		'not_found' => __('No News found.'),
	);
	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'news'),
		'has_archive' => true,
		'hierarchical' => false,
	);
	register_post_type('news', $args);
	// 	// Add taxonomy for Categories
	$taxonomy_labels = array(
		'name' => _x('Language', 'taxonomy general name'),
		'singular_name' => _x('Language', 'taxonomy singular name'),
		'search_items' => __('Search Language'),
		'all_items' => __('All Language'),
		'parent_item' => __('Parent Language'),
		'parent_item_colon' => __('Parent Language:'),
		'edit_item' => __('Edit Language'),
		'update_item' => __('Update Language'),
		'add_new_item' => __('Add New Language'),
		'new_item_name' => __('New Language Name'),
		'menu_name' => __('Language'),
	);

	$taxonomy_args = array(
		'hierarchical' => true,
		'labels' => $taxonomy_labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'add-language'),
	);

	register_taxonomy('add-language', array('news'), $taxonomy_args);

	// register the optcl products

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
		'gallery', // picture gallery support
	);
	$labels = array(
		'name' => _x('OPTCL Products', 'plural'),
		'singular_name' => _x('OPTCL Product', 'singular'),
		'menu_name' => _x('OPTCL Products', 'admin menu'),
		'name_admin_bar' => _x('OPTCL Products', 'admin bar'),
		'add_new' => _x('Add New', 'add New'),
		'add_new_item' => __('Add New News'),
		'new_item' => __('New OPTCL Products'),
		'edit_item' => __('Edit OPTCL Products'),
		'view_item' => __('View OPTCL Products'),
		'all_items' => __('All OPTCL Products'),
		'search_items' => __('Search OPTCL Products'),
		'not_found' => __('No OPTCL Products found.'),
	);
	$args = array(
		'supports' => $supports,
		'taxonomies'           => array('brand', 'product-category'),
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'optclproduct'),
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false, // This line ensures the post type is not excluded from search
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type('OPTCL Product', $args);
}
add_action('init', 'optcl_post_type_news');
/*Custom Post type end*/

// /*Custom Post type start*/
// function optcl_post_type_product() {
// 	$supports = array(
// 		'title', // post title
// 		'editor', // post content
// 		'author', // post author
// 		'thumbnail', // featured images
// 		'excerpt', // post excerpt
// 		'custom-fields', // custom fields
// 		'comments', // post comments
// 		'revisions', // post revisions
// 		'post-formats', // post formats
// 	);

// 	$labels = array(
// 		'name' => _x('Products', 'plural'),
// 		'singular_name' => _x('Product', 'singular'),
// 		'menu_name' => _x('Products', 'admin menu'),
// 		'name_admin_bar' => _x('Products', 'admin bar'),
// 		'add_new' => _x('Add Products', 'add New'),
// 		'add_new_item' => __('Add New Products'),
// 		'new_item' => __('New Products'),
// 		'edit_item' => __('Edit Products'),
// 		'view_item' => __('View Products'),
// 		'all_items' => __('All Products'),
// 		'search_items' => __('Search Products'),
// 		'not_found' => __('No Products found.'),
// 	);

// 	$args = array(
// 		'supports' => $supports,
// 		'labels' => $labels,
// 		'public' => true,
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'product'),
// 		'has_archive' => true,
// 		'hierarchical' => false,
// 	);

// 	register_post_type('product', $args);

// 	// Add taxonomy for Categories
// 	$taxonomy_labels = array(
// 		'name' => _x('Categories', 'taxonomy general name'),
// 		'singular_name' => _x('Category', 'taxonomy singular name'),
// 		'search_items' => __('Search Categories'),
// 		'all_items' => __('All Categories'),
// 		'parent_item' => __('Parent Category'),
// 		'parent_item_colon' => __('Parent Category:'),
// 		'edit_item' => __('Edit Category'),
// 		'update_item' => __('Update Category'),
// 		'add_new_item' => __('Add New Category'),
// 		'new_item_name' => __('New Category Name'),
// 		'menu_name' => __('Categories'),
// 	);

// 	$taxonomy_args = array(
// 		'hierarchical' => true,
// 		'labels' => $taxonomy_labels,
// 		'show_ui' => true,
// 		'show_admin_column' => true,
// 		'query_var' => true,
// 		'rewrite' => array('slug' => 'product-category'),
// 	);

// 	register_taxonomy('product_category', array('product'), $taxonomy_args);
// }

// add_action('init', 'optcl_post_type_product');

// acf option pages

add_action('acf/init', 'optcl_option_pages');

function optcl_option_pages()
{

	if (function_exists('acf_add_options_page')) {
		$acf_page = acf_add_options_page(array(
			'page_title' =>  __('OPTCL Settings'),
			'menu_title' => __('OPTCL Settings'),
			'redirect' => false
		));
		$acf_sub_page = acf_add_options_page(array(
			'page_title' =>  __('OPTCL Services'),
			'menu_title' => __('OPTCL Services'),
			'parent_slug' => $acf_page['menu_slug']
		));
		$acf_abt_page = acf_add_options_page(array(
			'page_title' =>  __('OPTCL About'),
			'menu_title' => __('OPTCL About'),
			'parent_slug' => $acf_page['menu_slug']
		));
		$acf_ftr_page = acf_add_options_page(array(
			'page_title' =>  __('OPTCL Footer'),
			'menu_title' => __('OPTCL Footer'),
			'parent_slug' => $acf_page['menu_slug']
		));
	}
}

function mapstyles($stylefilename, $stylepath)
{
	wp_enqueue_style($stylefilename, get_template_directory_uri() . $stylepath, array(), filemtime(get_template_directory() . $stylepath));
}

// hook for cron job

add_action('init', 'my_daily_cron_job');

function my_daily_cron_job()
{
	if (!wp_next_scheduled('bl_optcl_cronjob')) {
		wp_schedule_event(time(), 'daily', 'bl_optcl_cronjob');
	}
}
function optcl_cronjob()
{
	$key = 'c1282a90-b365-4ea1-8475-8ecc92b41e52';
	$categories_url = 'https://new.optclsales.com/api/v1/marketing/categories';
	$brand_url = 'https://new.optclsales.com/api/v1/marketing/brands';

	$api_url_pr = 'https://new.optclsales.com/api/v1/marketing/products';
	$header = array(
		'Content-Type' => 'application/json', // Adjust this based on your API's requirements
		'api-Key' => $key,
	);
	api_to_product_category($categories_url, $header);
	api_to_product_brand($brand_url, $header);
	api_to_all_products_without_lang($api_url_pr, $header);
	api_to_all_products($api_url_pr, $header);
}
add_action('bl_optcl_cronjob', 'optcl_cronjob');


// function api_to_product_category($url,$headers){
// 	$response_cat = wp_remote_get($url, array('headers' => $headers));

// 	if (is_wp_error($response_cat)) {
// 		echo 'Error: ' . $response_cat;
// 	} else {
// 		$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

// 		foreach ($data_cat['data'] as $item) {
// 			$cate_name = $item['name'];
// 			$taxonomy = 'product-category'; // Taxonomy slug
// 			$cat_id = $item['code'];
// 			$exist=term_exists($cate_name,$taxonomy);
// 			$args = array(
// 				'slug' => $item['slug'],
// 			);
//             if($exist == null){
// 			$term_id=wp_insert_term($cate_name, $taxonomy, $args);
// 				update_field("tax_code",$cat_id,$term_id['term_id']);
// 			}

// 			// Check if the term was inserted successfully
// 		}
// 	}
// }
function api_to_product_category($url, $headers)
{
	$response_cat = wp_remote_get($url, array('headers' => $headers));

	if (is_wp_error($response_cat)) {
		error_log('Error fetching API data: ' . $response_cat->get_error_message());
		return; // Exit the function if there's an error
	}

	$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

	foreach ($data_cat['data'] as $item) {
		$cate_name = $item['name'];
		$taxonomy = 'product-category';
		$cat_id = $item['code'];
		$name_ar = $item['name_ar'];

		$exist = term_exists($cate_name, $taxonomy);

		$args = array(
			'slug' => $item['slug'],

		);

		if ($exist === null) {
			$term_id = wp_insert_term($cate_name, $taxonomy, $args);

			// update_field("tax_code", $cat_id, $term_id['term_id']);
			if (!is_wp_error($term_id)) {
				// update_field("tax_code", $cat_id, $term_id['term_id']);
				update_term_meta($term_id['term_id'], 'tax_code', $cat_id);
				update_term_meta($term_id['term_id'], 'name_arabic', $name_ar);
				error_log('Term created successfully: ' . $cate_name);
			} else {
				error_log('Error creating term: ' . $term_id->get_error_message());
			}
		} else {
			// Update existing term if needed (adjust logic as required)
			// ...
		}
	}
}

function api_to_product_brand($url, $headers)
{
	$response_cat = wp_remote_get($url, array('headers' => $headers));

	if (is_wp_error($response_cat)) {
		echo 'Error: ' . $response_cat;
	} else {
		$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

		foreach ($data_cat['data'] as $item) {
			$cate_name = $item['name'];
			$taxonomy = 'brand'; // Taxonomy slug
			$cat_id = $item['code'];
			$name_ar = $item['name_ar'];
			$exist = term_exists($cate_name, $taxonomy);
			$args = array(
				'slug' => $item['slug'],
			);
			if ($exist == null) {
				$term_id = wp_insert_term($cate_name, $taxonomy, $args);
				// var_dump($term_id);
				// update_field("tax_code",$cat_id,$term_id['term_id']);
				update_term_meta($term_id['term_id'], 'tax_code', $cat_id);
				update_term_meta($term_id['term_id'], 'name_arabic', $name_ar);
			}
			// Check if the term was inserted successfully
		}
	}
}

function api_to_all_products($url, $headers)
{
	$response_cat = wp_remote_get($url, array('headers' => $headers));

	if (is_wp_error($response_cat)) {
		echo 'Error: ' . $response_cat;
	} else {
		$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

		foreach ($data_cat['data'] as $item) {

			$post = 'optclproduct';
			$pr_id = $item['item_code'];
			// $name = $item['name'];
			$name_ar = $item['name_ar'];
			$package_info = $item['package_info'];
			$material_division = $item['material_division'];
			$promotion_label = $item['promotion_label'];
			$brand = $item['brand'];
			$brand_code = $item['brand_code'];
			$category = $item['category'];
			$category_code = $item['category_code'];
			$photo = $item['photo'];

			$args = array(
				'post_type' => 'optclproduct',
				'post_per_page' => -1,
				'meta_query' => array(
					array(
						'key' => 'item_code',
						'value' => $pr_id,
						'compare' => '='
					)
				)
			);
			$meta_query = new WP_Query($args);

			if ($meta_query->found_posts <= 0) {

				// Insert or update custom post type here
				$post_id = wp_insert_post(array(
					'post_title' => $item['name'],
					'post_type' => $post, // Change this to your custom post type slug
					'post_status' => 'publish',
				));
				$language_code = 'en'; // Replace 'fr' with the language code you want to assign (e.g., 'en', 'es', 'de')
				pll_set_post_language($post_id, $language_code);

				$post_idar = wp_insert_post(array(
					'post_title' => $item['name_ar'],
					'post_type' => $post, // Change this to your custom post type slug
					'post_status' => 'publish',
				));
				$language_code = 'ar'; // Replace 'fr' with the language code you want to assign (e.g., 'en', 'es', 'de')
				pll_set_post_language($post_idar, $language_code);
				pll_save_post_translations(array('en' => $post_id, 'ar' => $post_idar));
				if ($post_id) {
					// Set post meta or custom field as needed
					update_post_meta($post_id, 'item_code', $pr_id);
					update_post_meta($post_idar, 'item_code', $pr_id);
					update_post_meta($post_id, 'name_ar', $name_ar);
					update_post_meta($post_idar, 'name_ar', $name_ar);
					update_post_meta($post_id, 'package_info', $package_info);
					update_post_meta($post_idar, 'package_info', $package_info);
					update_post_meta($post_id, 'material_division', $material_division);
					update_post_meta($post_idar, 'material_division', $material_division);
					update_post_meta($post_id, 'promotion_label', $promotion_label);
					update_post_meta($post_idar, 'promotion_label', $promotion_label);
					update_post_meta($post_id, 'product_image_url', $photo);
					update_post_meta($post_idar, 'product_image_url', $photo);

					$term_br = get_term_by('name', $brand, 'brand');
					if ($term_br !== false) {
						wp_set_post_terms($post_id, array($term_br->term_id), 'brand');
					}
					$term_cat = get_term_by('name', $category, 'product-category');
					if ($term_cat !== false) {
						wp_set_post_terms($post_id, array($term_cat->term_id), 'product-category');
					}
				}
			} else {
				if ($meta_query->have_posts()) {
					while (have_posts()) : the_post();
						$post_id = get_the_ID();
						if ($post_id) {
							// Set post meta or custom field as needed
							$arabic_city = pll_get_post_translations($post_id);
							$post_idar = $arabic_city['ar'];
							update_post_meta($post_id, 'item_code', $pr_id);
							update_post_meta($post_idar, 'item_code', $pr_id);
							update_post_meta($post_id, 'name_ar', $name_ar);
							update_post_meta($post_idar, 'name_ar', $name_ar);
							update_post_meta($post_id, 'package_info', $package_info);
							update_post_meta($post_idar, 'package_info', $package_info);
							update_post_meta($post_id, 'material_division', $material_division);
							update_post_meta($post_idar, 'material_division', $material_division);
							update_post_meta($post_id, 'promotion_label', "checkmebro");
							update_post_meta($post_idar, 'promotion_label', $promotion_label);
							update_post_meta($post_id, 'product_image_url', $photo);
							update_post_meta($post_idar, 'product_image_url', $photo);

							$term_br = get_term_by('name', $brand, 'brand');

							set_featured_image_from_url($post_id,$photo);
							if ($term_br !== false) {
								wp_set_post_terms($post_id, array($term_br->term_id), 'brand');
							}
							$term_cat = get_term_by('name', $category, 'product-category');
							if ($term_cat !== false) {
								wp_set_post_terms($post_id, array($term_cat->term_id), 'product-category');
							}
						}
					endwhile;
				}
			}
			// }
		}
		wp_reset_postdata();
	}
}
function api_to_all_products_without_lang($url, $headers)
{
	$response_cat = wp_remote_get($url, array('headers' => $headers));
	$post_id = wp_insert_post(array(
		'post_title' => 'main',
		'post_type' => 'optcl-product', // Change this to your custom post type slug
		'post_status' => 'publish',
	));
	if (is_wp_error($response_cat)) {
		echo 'Error: ' . $response_cat;
	} else {
		$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

		foreach ($data_cat['data'] as $item) {

			$post = 'optcl-product';
			$pr_id = $item['item_code'];
			// $name = $item['name'];
			$name_ar = $item['name_ar'];
			$package_info = $item['package_info'];
			$material_division = $item['material_division'];
			$promotion_label = $item['promotion_label'];
			$brand = $item['brand'];
			$brand_code = $item['brand_code'];
			$category = $item['category'];
			$category_code = $item['category_code'];
			$photo = $item['photo'];

			$args = array(
				'post_type' => 'optcl-product',
				'post_per_page' => -1,
				'meta_query' => array(
					array(
						'key' => 'item_code',
						'value' => $pr_id,
						'compare' => '='
					)
				)
			);
			$meta_query = new WP_Query($args);

			if ($meta_query->found_posts <= 0) {

				// Insert or update custom post type here
				$post_id = wp_insert_post(array(
					'post_title' => $item['name'],
					'post_type' => $post, // Change this to your custom post type slug
					'post_status' => 'publish',
				));
				if ($post_id) {
					// Set post meta or custom field as needed
					update_post_meta($post_id, 'item_code', $pr_id);
					update_post_meta($post_id, 'name_ar', $name_ar);
					update_post_meta($post_id, 'package_info', $package_info);
					update_post_meta($post_id, 'material_division', $material_division);
					update_post_meta($post_id, 'promotion_label', $promotion_label);
					update_post_meta($post_id, 'product_image_url', $photo);

					$term_br = get_term_by('name', $brand, 'brand');
					if ($term_br !== false) {
						wp_set_post_terms($post_id, array($term_br->term_id), 'brand');
					}
					$term_cat = get_term_by('name', $category, 'product-category');
					if ($term_cat !== false) {
						wp_set_post_terms($post_id, array($term_cat->term_id), 'product-category');
					}
				}
			}else{

			}
			// }
		}
		wp_reset_postdata();
	}
}
// function set_featured_image_from_url($post_id, $image_url)
// {

// 	// Download the image from the URL
// 	$image_data = wp_remote_get($image_url);

// 	if (is_wp_error($image_data)) {
// 		return $image_data; // Handle download error
// 	}

// 	// Get image data
// 	$image_content = wp_remote_retrieve_body($image_data);
// 	$filename = basename($image_url);

// 	// Set upload directory
// 	$upload_dir = wp_upload_dir();

// 	// Check if directory exists and create it if not
// 	if (!wp_mkdir_p($upload_dir['path'])) {
// 		return new WP_Error('file_upload_error', __('Failed to create directory'));
// 	}

// 	// Full path to the uploaded image
// 	$filepath = $upload_dir['path'] . '/' . $filename;

// 	// Write image data to the filepath
// 	file_put_contents($filepath, $image_content);

// 	// Set attachment data
// 	$attachment = array(
// 		'file' => $filepath,
// 		'post_mime_type' => wp_check_filetype($filepath)['type'],
// 	);

// 	// Upload the image and get attachment ID
// 	$attachment_id = wp_insert_attachment($attachment);

// 	// Generate attachment metadata (required for featured image)
// 	require_once(ABSPATH . 'wp-admin/includes/image.php');
// 	wp_generate_attachment_metadata($attachment_id, $filepath);

// 	// Set the uploaded image as the featured image
// 	if (!is_wp_error($attachment_id)) {
// 		set_post_thumbnail($post_id, $attachment_id);
// 	} else {
// 		return $attachment_id; // Handle attachment creation error
// 	}
// }




// function create_products_from_api($url,$headers) {
//     // Create a post object with dummy data
// 	$response_cat = wp_remote_get($url, array('headers' => $headers));

// 	if (is_wp_error($response_cat)) {
// 		echo 'Error: ' . $response_cat;
// 	}
// 	else{
// 		$data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);

// 		foreach ($data_cat['data'] as $item) {
// 			$my_post = array(
// 				'post_title'    => $item['name'],
// 				'post_type'     => 'optclproduct',
// 				'post_status'   => 'publish',// Insert category IDs here. This post will be assigned to these categories.
// 			  );

// 			  // Insert the post into the database
// 			  $post_id = wp_insert_post( $my_post );

// 			  // Assigning custom field data
// 			  if ($post_id) {
// 				wp_set_post_terms($post_id, $item['id'], 'product-category');
// 			  }
// 		}
// 	}

// }

function  producttab()
{
	$lang = pll_current_language();
	$response = $_POST['dep'];
	$response = strtoupper($response);
	$category = isset($_POST['category']) ? $_POST['category'] : [];
	$brands = isset($_POST['brands']) ? $_POST['brands'] : [];
	$args = array(
		'post_type' => 'optcl-product', // Adjust post type if needed
		'posts_per_page' => 9, // Set the number of posts to display, -1 for all
		'lang' => $lang,
		'meta_query' => array(
			array(
				'key' => 'material_division', // Replace 'your_acf_field_name' with your ACF field name
				'value' => $response, // Replace 'desired_value' with the value you're searching for
				'compare' => '=', // Use '=' for exact match
			),
		),
	);
	if (count($category) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'product-category',
			'field' => 'id',
			'terms' => $category, // Assuming $response is an array of category IDs
			'operator' => 'IN'
		);
	}
	// Check if $brandsdata is not empty and add the query accordingly
	if (count($brands) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'brand', // Add another taxonomy
			'field' => 'id',
			'terms' => $brands, // Assuming $another_response is an array of term IDs for the second taxonomy
			'operator' => 'IN'
		);
	}
	$posts_query = new WP_Query($args);
	$results = "";
	if ($posts_query->have_posts()) {
		while ($posts_query->have_posts()) : $posts_query->the_post();
			// Display your post content as needed
			$results .= productloop(get_the_ID());

		endwhile;
		wp_reset_postdata();
	} else {
		// No posts found
		if ($lang == 'en') {
			$results .= '<p class="no_more_products">No posts found.</p>';
		} else {
			$results .= '<p class="no_more_products">لم يتم العثور على أية منشورات.</p>';
		}
	}




	echo $results;
	die();
}

add_action("wp_ajax_producttab", "producttab");
add_action("wp_ajax_nopriv_producttab", "producttab");

function catFilters()
{
	$lang = pll_current_language();
	$results = "";
	$depar = $_POST['tabs'];

	$category = isset($_POST['category']) ? $_POST['category'] : [];
	$brands = isset($_POST['brands']) ? $_POST['brands'] : [];

	$args = array(
		'post_type' => 'optcl-product', // Adjust post type if needed
		'posts_per_page' => 9, // Set the number of posts to display, -1 for all
	);

	if (count($category) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'product-category',
			'field' => 'id',
			'terms' => $category, // Assuming $response is an array of category IDs
			'operator' => 'IN'
		);
	}
	// Check if $brandsdata is not empty and add the query accordingly
	if (count($brands) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'brand', // Add another taxonomy
			'field' => 'id',
			'terms' => $brands, // Assuming $another_response is an array of term IDs for the second taxonomy
			'operator' => 'IN'
		);
	}

	// var_dump($args);
	$products_query = new WP_Query($args);
	//  var_dump($products_query);
	if ($products_query->have_posts()) {
		while ($products_query->have_posts()) {
			$products_query->the_post();
			if (!empty($depar)) {
				if (strtolower(get_field("material_division", get_the_ID())) == $depar) {
					$results .= productloop(get_the_ID());
				}
			} else {
				$results .= productloop(get_the_ID());
			}
		}
		wp_reset_postdata();
	} else {
		if ($lang == 'en') {
			$results .= '<p class="no_more_products">No posts found.</p>';
		} else {
			$results .= '<p class="no_more_products">لم يتم العثور على أية منشورات.</p>';
		}
	}
	// echo count($response);
	echo $results;
	die();
}

add_action("wp_ajax_catFilters", "catFilters");
add_action("wp_ajax_nopriv_catFilters", "catFilters");

function load_more_posts()
{
	$lang = pll_current_language();
	$response = $_POST['depart'];
	$cat = $_POST['categories'];
	$offset = intval($_POST['offset']);
	$posts_per_page = 9; // Change this to match your posts per page setting
	$results = '';
	$category = isset($_POST['category']) ? $_POST['category'] : [];
	$brands = isset($_POST['brands']) ? $_POST['brands'] : [];
	// $args = array(
	//     'post_type' => 'optclproduct',
	//     'posts_per_page' => $posts_per_page,
	//     'offset' => $offset,
	// );
	$args = array(
		'post_type' => 'optcl-product', // Adjust post type if needed
		'posts_per_page' => $posts_per_page,
		'offset' => $offset,
	);

	if (!empty($response)) {
		$args['meta_query'] = array(
			array(
				'key' => 'material_division',
				'value' => $response,
				'compare' => '=',
			),
		);
	}

	if (count($category) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'product-category',
			'field' => 'id',
			'terms' => $category, // Assuming $response is an array of category IDs
			'operator' => 'IN'
		);
	}
	// Check if $brandsdata is not empty and add the query accordingly
	if (count($brands) > 0) {
		$args['tax_query'][] = array(
			'taxonomy' => 'brand', // Add another taxonomy
			'field' => 'id',
			'terms' => $brands, // Assuming $another_response is an array of term IDs for the second taxonomy
			'operator' => 'IN'
		);
	}

	$posts = new WP_Query($args);

	if ($posts->have_posts()) {
		while ($posts->have_posts()) {
			$posts->the_post();
			$results .= productloop(get_the_ID());
		}
		wp_reset_postdata();
	} else {
		// No more posts
		if ($lang == 'en') {
			$results .= '<p class="no_more_products">No posts found.</p>';
		} else {
			$results .= '<p class="no_more_products">لم يتم العثور على أية منشورات.</p>';
		}
	}
	// Store the results in a session variable if not already stored
	if (!isset($_SESSION['posts_saved'])) {
		$_SESSION['posts_saved'] = $results;
	} else {
		// Output an empty result if already stored
		$results = '';
	}
	echo $results;
	die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');



function resetFilters()
{
	$lang = pll_current_language();
	$results = "";

	$brandsdata = $_POST['brandsdata'];
	$categorydata = $_POST['categorydata'];

	$args = array(
		'post_type' => 'optcl-product', // Adjust post type if needed
		'posts_per_page' => 9, // Set the number of posts to display, -1 for all
		'tax_query' => array(
			'relation' => 'AND', // You can adjust relation as per your requirement
		),
	);

	// Check if $categorydata is not empty and add the query accordingly
	if (!empty($categorydata)) {
		$args['tax_query'][] = array(
			'taxonomy' => 'product-category',
			'field' => 'id',
			'terms' => $categorydata, // Assuming $response is an array of category IDs
			'operator' => 'IN'
		);
	}

	// Check if $brandsdata is not empty and add the query accordingly
	if (!empty($brandsdata)) {
		$args['tax_query'][] = array(
			'taxonomy' => 'brand', // Add another taxonomy
			'field' => 'id',
			'terms' => $brandsdata, // Assuming $another_response is an array of term IDs for the second taxonomy
			'operator' => 'IN'
		);
	}

	// Uncomment the line below if you want to debug the $args array
	// var_dump($args);

	$products_query = new WP_Query($args);

	//  var_dump($products_query);
	if ($products_query->have_posts()) {
		while ($products_query->have_posts()) {
			$products_query->the_post();
			$results .= productloop(get_the_ID());
		}
		wp_reset_postdata();
	} else {
		if ($lang == 'en') {
			$results .= '<p class="no_more_products">No posts found.</p>';
		} else {
			$results .= '<p class="no_more_products">لم يتم العثور على أية منشورات.</p>';
		}
	}
	// echo count($response);
	echo $results;
	die();
}

add_action("wp_ajax_resetFilters", "resetFilters");
add_action("wp_ajax_nopriv_resetFilters", "resetFilters");





function set_featured_image_from_url($post_id, $image_url) {

  // Include required WordPress files (within your theme or plugin)
  include( 'wp-load.php' );
  include_once( ABSPATH . '/wp-admin/includes/image.php' );

  // Get image details (mime type)
  $image_type = end(explode('/', getimagesize($image_url)['mime']));

  // Generate a unique filename
  $uniq_name = date('dmY') . uniqid();
  $filename = $uniq_name . '.' . $image_type;

  // Get upload directory details
  $uploaddir = wp_upload_dir();
  $uploadfile = $uploaddir['path'] . '/' . $filename;

  // Download image content
  $contents = file_get_contents($image_url);

  // Save downloaded content to the upload directory
  $savefile = fopen($uploadfile, 'w');
  fwrite($savefile, $contents);
  fclose($savefile);

  // Check file type
  $wp_filetype = wp_check_filetype(basename($filename), null );

  // Prepare attachment details
  $attachment = array(
    'post_mime_type' => $wp_filetype['type'],
    'post_title' => $filename,
    'post_content' => '',
    'post_status' => 'inherit'
  );

  // Insert the attachment (upload the image)
  $attach_id = wp_insert_attachment( $attachment, $uploadfile );

  // Generate attachment metadata (optional for some themes)
  if ($attach_id) {
    $imagenew = get_post( $attach_id );
    $fullsizepath = get_attached_file( $imagenew->ID );
    $attach_data = wp_generate_attachment_metadata( $attach_id, $fullsizepath );
    wp_update_attachment_metadata( $attach_id, $attach_data );
  }

  // Set the uploaded attachment as the featured image
  if ($attach_id) {
    set_post_thumbnail( $post_id, $attach_id );
  } else {
    echo 'Error uploading image.';
  }
}


//function load_more_posts() {
//     $response = $_POST['dep'];
//     $cat = $_POST['categories'];
//     $offset = intval($_POST['offset']);
//     $posts_per_page = 9; // Change this to match your posts per page setting

//     $args = array(
//         'post_type' => 'optclproduct',
//         'posts_per_page' => $posts_per_page,
//         'offset' => $offset,
//         'relation' => 'OR',
//         'meta_query' => array(
//             array(
//                 'key' => 'material_division',
//                 'value' => $response,
//                 'compare' => '=',
//             ),
//         ),
//         'tax_query' => array(
//             'relation' => 'OR',
//             array(
//                 'taxonomy' => 'product-category',
//                 'field' => 'id',
//                 'terms' => $cat,
//                 'operator' => 'IN'
//             ),
//             array(
//                 'taxonomy' => 'brand',
//                 'field' => 'id',
//                 'terms' => $cat,
//                 'operator' => 'IN'
//             ),
//         ),
//     );

//     $posts = new WP_Query($args);
//     $results = '';

//     if ($posts->have_posts()) {
//         while ($posts->have_posts()) {
//             $posts->the_post();
//             $results .= productloop(get_the_ID());
//         }
//         wp_reset_postdata();
//     }
//     echo $results;
//     wp_die();
// }
// add_action('wp_ajax_load_more_posts', 'load_more_posts');
// add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');



// function load_more_posts() {
//     $response = $_POST['dep'];
//     $response = strtoupper($response);

//     $categories = isset($_POST['categories']) ? $_POST['categories'] : array();
//     $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

//     $args = array(
//         'post_type' => 'optclproduct',
//         'posts_per_page' => 9,
//         // 'paged' => ($offset / 9) + 1, // Calculate the page number based on offset
// 		'offset' => $offset,
//         'meta_query' => array(
//             array(
//                 'key' => 'material_division',
//                 'value' => $response,
//                 'compare' => '=',
//             ),
//         ),
//     );

//     if (!empty($categories)) {
//         $args['tax_query'] = array(
//             'relation' => 'OR',
//             array(
//                 'taxonomy' => 'product-category',
//                 'field' => 'id',
//                 'terms' => $categories,
//                 'operator' => 'IN'
//             ),
// 			array(
// 				'taxonomy' => 'brand', // Add another taxonomy
// 				'field' => 'id',
// 				'terms' => $response, // Assuming $another_response is an array of term IDs for the second taxonomy
// 				'operator' => 'IN'
// 			),
//             // Add more taxonomies as needed
//         );
//     }

//     $posts_query = new WP_Query($args);
//     $results = '';

//     if ($posts_query->have_posts()) {
//         while ($posts_query->have_posts()) {
//             $posts_query->the_post();
//             $results .= productloop(get_the_ID());
//         }
//         wp_reset_postdata();
//         echo $results; // Output the results only if posts are found
//     } else {
//         echo 'No more posts found.';
//     }

//     wp_die();
// }

// add_action('wp_ajax_load_more_posts', 'load_more_posts');
// add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// In your theme's functions.php file or your plugin file




function productloop($postid)
{

	$image_url = get_field("product_image_url", $postid);
	$image_url = (empty($image_url)) ? get_template_directory_uri() . '/img/empty.jpg' : $image_url;
	$lang = pll_current_language();
	$title = get_the_title($postid);
	$name_ar = get_field('name_ar', $postid);
	$pkg_wt = get_field('package_info', $postid);
	$postlink = '';
	if ($lang == 'en') {
		$postlink = home_url('en/optcl-products/?id=' . $postid);
	} else {
		$postlink = home_url('منتجات//?id=' . $postid);
	}
	$output = "";

	$output .= '<div class="col-md-4 col-6 element-item food-products zoom-in-once-products	">
	<a href="' . $postlink . '">
	  <div class="prod-item product-item-h-350 prod-item-en prod-item-ar">
		<div class="mi_h-70 bg-light">
		  <img src="' . $image_url . '" class="img-fluid custom-image-size h-100">
		</div>';

	if ($lang == 'en') {
		$output .= '<div class="caption caption-ar mbl-pd-0">
			<h5 class="fnt-brown custom-caption-size caption-en ipad-font-size">' . $title . '</h5>
			<p>' . $pkg_wt . '</p>
		  </div>';
	} else {
		$output .= '<div class="caption caption-ar mbl-pd-0">
			<h5 class="fnt-brown fnt-20 custom-caption-size caption-en ipad-font-size">' . $name_ar . '</h5>
			<p>' . $pkg_wt . '</p>
		  </div>';
	}

	$output .= '</div>
	</a>
	<div class="spacer-20 desktop-spacer-30"></div>
  </div>';

	return $output;
}

function convert_pdf()
{
	// Security check (modify if needed)
	$pid = $_POST['depid'];
	$result = '  <div class="modal-header px-0 py-0 rounded-4"><div id="demo" class="carousel slide" data-bs-ride="carousel"> ';
	$gallery = get_field('gallery', $pid);
	// Loop through all the images and output the indicators
	if ($gallery) {
		$result .= '<div class="carousel-inner d-block owl-carousel mi_width_900" style="border-top-left-radius: 15px;">';
		foreach ($gallery as $key => $src) {
			$class = ($key == 0) ? 'carousel-item active' : 'carousel-item';
			$result .= '<div class="' . $class . '">
                  <img src="' . $src . '" class="my-custom-class image_max_height mi_width_900" alt="Gallery image" />
                </div>';
		}
		$result .= '</div>
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div> </div> </div>
        ';
	}
	$result .= '<div class="modal-body"><div class="row"><div class="col-4 fnt-25"><b>' . get_the_title($pid) . '</b></div> <div class="col-4"></div>    <div class="col-4 text-end"><p class="mc-date fnt-12" id="slider_news_date_dir">';
	$date_format = get_option('date_format');
	$result .= get_the_date($date_format, $pid);
	$result .= '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 24 24" fill="none">
     <path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="#282160"/>
     <path d="M16.9612 17.7689H13.7304C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0078 17.3809 12.9227 17.1754 12.9227 16.9612V13.7304C12.9227 13.5162 13.0078 13.3108 13.1593 13.1593C13.3108 13.0078 13.5162 12.9227 13.7304 12.9227H16.9612C17.1754 12.9227 17.3808 13.0078 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7304V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3808 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="#282160"/>
     <path d="M20.1923 8.07676H0.807692C0.593479 8.07676 0.388039 7.99167 0.236568 7.8402C0.0850959 7.68873 0 7.48329 0 7.26907C0 7.05486 0.0850959 6.84942 0.236568 6.69795C0.388039 6.54648 0.593479 6.46138 0.807692 6.46138H20.1923C20.4065 6.46138 20.612 6.54648 20.7634 6.69795C20.9149 6.84942 21 7.05486 21 7.26907C21 7.48329 20.9149 7.68873 20.7634 7.8402C20.612 7.99167 20.4065 8.07676 20.1923 8.07676Z" fill="#282160"/>
     <path d="M6.4615 4.84615C6.24729 4.84615 6.04185 4.76106 5.89038 4.60959C5.7389 4.45811 5.65381 4.25267 5.65381 4.03846V0.807692C5.65381 0.593479 5.7389 0.388039 5.89038 0.236568C6.04185 0.0850959 6.24729 0 6.4615 0C6.67571 0 6.88115 0.0850959 7.03263 0.236568C7.1841 0.388039 7.26919 0.593479 7.26919 0.807692V4.03846C7.26919 4.25267 7.1841 4.45811 7.03263 4.60959C6.88115 4.76106 6.67571 4.84615 6.4615 4.84615Z" fill="#282160"/>
     <path d="M14.5388 4.84615C14.3246 4.84615 14.1191 4.76106 13.9676 4.60959C13.8162 4.45811 13.7311 4.25267 13.7311 4.03846V0.807692C13.7311 0.593479 13.8162 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3246 0 14.5388 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2614 0.388039 15.3465 0.593479 15.3465 0.807692V4.03846C15.3465 4.25267 15.2614 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5388 4.84615Z" fill="#282160"/>
     </svg></p></div></div>
             </div>  <div class="col-12 p-3 fnt-18 mi_slider_desc">';
	$result .= get_post_field('post_content', $pid);
	$result .= ' </div>
     </div>';
	echo $result;
	// Important to stop script execution after handling submission
	die();
}
add_action('wp_ajax_convert_pdf', 'convert_pdf');
add_action('wp_ajax_nopriv_convert_pdf', 'convert_pdf');
