<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package OPTCL
 */
get_header();
$lang = pll_current_language();

$title = get_the_title();

$pid = get_the_ID();
$result = '<section class="non-vh" data-scroll-section><div class="spacer-120"></div>';
$result .= '<div class="flex-column modal-header px-0 py-0 rounded-4 search_slider_padding">
            <div id="demo" class="carousel slide" data-bs-ride="carousel"> ';
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
    </div> 
  </div>';
}
$result .= '<div class="modal-body search_single_padding">
            <div class="row">
            <div class="col-4 fnt-25"><b>' . get_the_title($pid) . '</b></div> 
            <div class="col-4"></div>    
            <div class="col-4 text-end"><p class="mc-date fnt-12" id="slider_news_date_dir">';
$date_format = get_option('date_format');
$result .= get_the_date($date_format, $pid);
$result .= '<svg xmlns="http://www.w3.org/2000/svg" width="21" height="17" viewBox="0 0 24 24" fill="none">
 <path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="#282160"/>
 <path d="M16.9612 17.7689H13.7304C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0078 17.3809 12.9227 17.1754 12.9227 16.9612V13.7304C12.9227 13.5162 13.0078 13.3108 13.1593 13.1593C13.3108 13.0078 13.5162 12.9227 13.7304 12.9227H16.9612C17.1754 12.9227 17.3808 13.0078 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7304V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3808 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="#282160"/>
 <path d="M20.1923 8.07676H0.807692C0.593479 8.07676 0.388039 7.99167 0.236568 7.8402C0.0850959 7.68873 0 7.48329 0 7.26907C0 7.05486 0.0850959 6.84942 0.236568 6.69795C0.388039 6.54648 0.593479 6.46138 0.807692 6.46138H20.1923C20.4065 6.46138 20.612 6.54648 20.7634 6.69795C20.9149 6.84942 21 7.05486 21 7.26907C21 7.48329 20.9149 7.68873 20.7634 7.8402C20.612 7.99167 20.4065 8.07676 20.1923 8.07676Z" fill="#282160"/>
 <path d="M6.4615 4.84615C6.24729 4.84615 6.04185 4.76106 5.89038 4.60959C5.7389 4.45811 5.65381 4.25267 5.65381 4.03846V0.807692C5.65381 0.593479 5.7389 0.388039 5.89038 0.236568C6.04185 0.0850959 6.24729 0 6.4615 0C6.67571 0 6.88115 0.0850959 7.03263 0.236568C7.1841 0.388039 7.26919 0.593479 7.26919 0.807692V4.03846C7.26919 4.25267 7.1841 4.45811 7.03263 4.60959C6.88115 4.76106 6.67571 4.84615 6.4615 4.84615Z" fill="#282160"/>
 <path d="M14.5388 4.84615C14.3246 4.84615 14.1191 4.76106 13.9676 4.60959C13.8162 4.45811 13.7311 4.25267 13.7311 4.03846V0.807692C13.7311 0.593479 13.8162 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3246 0 14.5388 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2614 0.388039 15.3465 0.593479 15.3465 0.807692V4.03846C15.3465 4.25267 15.2614 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5388 4.84615Z" fill="#282160"/>
 </svg></p>
            </div>
            </div>
           <div class="col-12 p-3 fnt-18 mi_slider_desc">';
$result .= get_post_field('post_content', $pid);
$result .= ' </div>
 </div>
 </section>';
echo $result;

get_footer();
?>
