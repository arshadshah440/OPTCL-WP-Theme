<?php /* Template Name: Media Center Arabic */

get_header();

?>
<style>
  /* width */
  /* ::-webkit-scrollbar {
  width: 17px;
} */

/* Track */
/* ::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
} */
 
/* Handle */
/* ::-webkit-scrollbar-thumb {
  background: #FFD200; 
  border-radius: 10px;
} */

/* Handle on hover */
/* ::-webkit-scrollbar-thumb:hover {
  background: #E49B0F; 
} */


</style>


<div data-scroll-container class="ipad-min-height">


  <section class="non-vh flipped" data-scroll-section>

    <div class="container-fluid bg-white " id="media_ar_hero_sect">
      <div class="spacer-120 spacer-mobile-60 desktop-space-90"></div>
      <div class="spacer-40 mobile-remove-space"></div>

      <div class="container" id="mi_mb_pd_20">
        <h3 id="media_main_heading" class="fnt-blue d-flex align-items-center justify-content-md-start global-heading-blue-ar fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold">
          <img src="<?php echo get_field("title_icon_ar"); ?>" class="img-fluid fa-mar-left-20">
          <?php echo get_field("title_heading_ar"); ?>
        </h3>
        <div class="spacer-40"></div>

        <div id="media_center_video" class="csc-video mobile-height-13rem desktop-height-354 mobile-overlay desktop-video-border-radius">
          <div class="ratio ratio-16x9">
            <video id="background-video" class="background-video-desktop" autoplay="" loop="" muted="">
              <source src="<?php echo get_field("banner_image_ar"); ?>" type="video/mp4">
            </video>
          </div>
          <div id="vid-caption" class="mobile-vid-caption desktop-vid-caption">
            <h1 class="fnt-white d-flex align-items-center global-heading-white-ar fnt-GE-SS-Two fnt-30 fw-bold"><?php echo get_field("banner_heading_ar"); ?></h1>

            <!-- <div class="spacer-20"></div> -->

            <div class="row w-100 position-relative mt-2">
                <p class="fnt-white video-caption-calendar-dekstop caption-calendar-text"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 25 28" fill="none">
<path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="white"/>
<path d="M16.9612 17.7689H13.7305C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0079 17.3809 12.9228 17.1754 12.9228 16.9612V13.7305C12.9228 13.5162 13.0079 13.3108 13.1593 13.1593C13.3108 13.0079 13.5162 12.9228 13.7305 12.9228H16.9612C17.1754 12.9228 17.3809 13.0079 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7305V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3809 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="white"/>
<path d="M20.1923 8.07675H0.807692C0.593479 8.07675 0.388039 7.99165 0.236568 7.84018C0.0850959 7.68871 0 7.48327 0 7.26906C0 7.05484 0.0850959 6.8494 0.236568 6.69793C0.388039 6.54646 0.593479 6.46136 0.807692 6.46136H20.1923C20.4065 6.46136 20.612 6.54646 20.7634 6.69793C20.9149 6.8494 21 7.05484 21 7.26906C21 7.48327 20.9149 7.68871 20.7634 7.84018C20.612 7.99165 20.4065 8.07675 20.1923 8.07675Z" fill="white"/>
<path d="M6.46147 4.84615C6.24726 4.84615 6.04182 4.76106 5.89035 4.60959C5.73887 4.45811 5.65378 4.25267 5.65378 4.03846V0.807692C5.65378 0.593479 5.73887 0.388039 5.89035 0.236568C6.04182 0.0850959 6.24726 0 6.46147 0C6.67568 0 6.88112 0.0850959 7.03259 0.236568C7.18407 0.388039 7.26916 0.593479 7.26916 0.807692V4.03846C7.26916 4.25267 7.18407 4.45811 7.03259 4.60959C6.88112 4.76106 6.67568 4.84615 6.46147 4.84615Z" fill="white"/>
<path d="M14.5387 4.84615C14.3245 4.84615 14.1191 4.76106 13.9676 4.60959C13.8161 4.45811 13.731 4.25267 13.731 4.03846V0.807692C13.731 0.593479 13.8161 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3245 0 14.5387 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2613 0.388039 15.3464 0.593479 15.3464 0.807692V4.03846C15.3464 4.25267 15.2613 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5387 4.84615Z" fill="white"/>
</svg> <?php echo get_the_date('j M Y'); ?> </p>
              <div class="col-md-11 w-100 global-content-white-ar video-caption-desc-desktop py-0 my-0 mobile-font-size-18">

                <?php echo get_field("banner_description_ar"); ?>

              </div>
              <div class="col-md-1"></div>
            </div>

          </div>
        </div>
      </div>

    </div>


  </section>

  <section class="flipped" data-scroll-section>

    <div class="container-fluid bg-white" id="media_ar_tabs_sect">
      <div class="spacer-47 spacer-mobile-30 dekstop-space-47"></div>

      <div class="container" id="media_content_cinter">
        <div class="row">

          <div class="col-md-2 fnt-GE-SS-Two" id="tabsbtns">

            <a href="" class="btn w-100 mc-nav active tabs-buttons-fonts fnt-18 fw-bold ipad-font-size" data-sect="newSect"><?php echo get_field("category_1_title_ar"); ?></a>
            <a href="" class="btn w-100 mc-nav tabs-buttons-fonts fw-bold ipad-font-size" data-sect="gallerySect"><?php echo get_field("category_2_title_ar"); ?></a>

            <div class="spacer-20"></div>
          </div>
          <?php if(!wp_is_mobile()): ?>
          <div class="col-md-10 mitabs" id="newSect">
            <div id="mc-list" class="row">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                'post_type'      => 'news',
                'posts_per_page' => 6,
                'paged' => $paged,
                'lang'           =>  pll_current_language('slug')
              );
              $custom_query = new WP_Query($args);

              while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div class="mc-item col-md-4 mc-item-mb">
                  <div class="mc-content mc-content-ar">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="mc-img img-fluid w-100">
                    <div class="mc-caption">
                      <div class="top showThis showThis-ar">
                        <h5 class="fnt-white mb-10 fnt-20 fnt-GE-SS-Two mi-leading-26"><?php echo the_title(); ?></h5>
                        <p class="fnt-white fnt-12 font-15"><?php echo the_excerpt(); ?></p>
                        <div class="spacer-10"></div>
                        <p class="mc-date fnt-12"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 25 28" fill="none">
<path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="white"/>
<path d="M16.9612 17.7689H13.7305C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0079 17.3809 12.9228 17.1754 12.9228 16.9612V13.7305C12.9228 13.5162 13.0079 13.3108 13.1593 13.1593C13.3108 13.0079 13.5162 12.9228 13.7305 12.9228H16.9612C17.1754 12.9228 17.3809 13.0079 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7305V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3809 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="white"/>
<path d="M20.1923 8.07675H0.807692C0.593479 8.07675 0.388039 7.99165 0.236568 7.84018C0.0850959 7.68871 0 7.48327 0 7.26906C0 7.05484 0.0850959 6.8494 0.236568 6.69793C0.388039 6.54646 0.593479 6.46136 0.807692 6.46136H20.1923C20.4065 6.46136 20.612 6.54646 20.7634 6.69793C20.9149 6.8494 21 7.05484 21 7.26906C21 7.48327 20.9149 7.68871 20.7634 7.84018C20.612 7.99165 20.4065 8.07675 20.1923 8.07675Z" fill="white"/>
<path d="M6.46147 4.84615C6.24726 4.84615 6.04182 4.76106 5.89035 4.60959C5.73887 4.45811 5.65378 4.25267 5.65378 4.03846V0.807692C5.65378 0.593479 5.73887 0.388039 5.89035 0.236568C6.04182 0.0850959 6.24726 0 6.46147 0C6.67568 0 6.88112 0.0850959 7.03259 0.236568C7.18407 0.388039 7.26916 0.593479 7.26916 0.807692V4.03846C7.26916 4.25267 7.18407 4.45811 7.03259 4.60959C6.88112 4.76106 6.67568 4.84615 6.46147 4.84615Z" fill="white"/>
<path d="M14.5387 4.84615C14.3245 4.84615 14.1191 4.76106 13.9676 4.60959C13.8161 4.45811 13.731 4.25267 13.731 4.03846V0.807692C13.731 0.593479 13.8161 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3245 0 14.5387 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2613 0.388039 15.3464 0.593479 15.3464 0.807692V4.03846C15.3464 4.25267 15.2613 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5387 4.84615Z" fill="white"/>
</svg> <?php echo get_the_date('j M Y'); ?> </p>
                      </div>

                      <div class="bottom hideThis">
                        <div class="row">
                          <div class="col-1"></div>
                          <div class="col-10 fnt-GE-SS-Two">
                          <button data-bs-toggle="modal" data-bs-target="#myModal" class="d-none" id="modal_id_post"> hide me</button>
                          <center><span class="btn btn-slider btn-warning btn-yellow w-100 popme_up_mi" post_id='<?php echo get_the_ID();?>' >أقرا المزيد</span></center>
                          </div>
                          <div class="col-1"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();                  ?>
              <div class="pagination">
                <?php
                echo paginate_links(array(
                  'base'      => get_pagenum_link(1) . '%_%',
                  'format'    => '?paged=%#%',
                  'current'   => max(1, $custom_query->get('paged')),
                  'total'     => $custom_query->max_num_pages,
                  'prev_text' => '&laquo;',
                  'next_text' => '&raquo;',
                ));
                ?>
              </div>

            </div>
          </div>
          <!-- <div class="spacer-120"></div> -->
          <!-- <div class="spacer-20"></div> -->
          <?php endif; ?>

                <!-- ****************News Cersoul For Mobile************ -->
                <!-- <div class="spacer-20"></div> -->
                <?php if(wp_is_mobile()): ?>
                <div class="col-md-10 mitabs" id="newSect">
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Your PHP loop to display news items goes here
            $args = array(
                'post_type'      => 'news',
                'lang'           => pll_current_language('slug')
            );
            $custom_query = new WP_Query($args);
            $count = 0; // Counter to identify the first item
            while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                <div class="carousel-item <?php if ($count == 0) echo 'active'; ?>">
                    <div class="mc-content mc-content-ar">
                        <!-- Your news content goes here -->
                        <div class="mc-item col-md-4 mc-item-mb">
                            <div class="mc-content mc-content-ar">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="mc-img img-fluid w-100">
                                <div class="mc-caption">
                                    <div class="top showThis showThis-ar">
                                        <h5 class="fnt-white mb-10 fnt-20 fnt-GE-SS-Two mi-leading-26"><?php echo get_the_title(); ?></h5>
                                        <p class="fnt-white fnt-12 font-15"><?php echo get_the_excerpt(); ?></p>
                                        <div class="spacer-10"></div>
                                        <p class="mc-date fnt-12"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 20 28" fill="none">
<path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="white"/>
<path d="M16.9612 17.7689H13.7305C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0079 17.3809 12.9228 17.1754 12.9228 16.9612V13.7305C12.9228 13.5162 13.0079 13.3108 13.1593 13.1593C13.3108 13.0079 13.5162 12.9228 13.7305 12.9228H16.9612C17.1754 12.9228 17.3809 13.0079 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7305V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3809 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="white"/>
<path d="M20.1923 8.07675H0.807692C0.593479 8.07675 0.388039 7.99165 0.236568 7.84018C0.0850959 7.68871 0 7.48327 0 7.26906C0 7.05484 0.0850959 6.8494 0.236568 6.69793C0.388039 6.54646 0.593479 6.46136 0.807692 6.46136H20.1923C20.4065 6.46136 20.612 6.54646 20.7634 6.69793C20.9149 6.8494 21 7.05484 21 7.26906C21 7.48327 20.9149 7.68871 20.7634 7.84018C20.612 7.99165 20.4065 8.07675 20.1923 8.07675Z" fill="white"/>
<path d="M6.46147 4.84615C6.24726 4.84615 6.04182 4.76106 5.89035 4.60959C5.73887 4.45811 5.65378 4.25267 5.65378 4.03846V0.807692C5.65378 0.593479 5.73887 0.388039 5.89035 0.236568C6.04182 0.0850959 6.24726 0 6.46147 0C6.67568 0 6.88112 0.0850959 7.03259 0.236568C7.18407 0.388039 7.26916 0.593479 7.26916 0.807692V4.03846C7.26916 4.25267 7.18407 4.45811 7.03259 4.60959C6.88112 4.76106 6.67568 4.84615 6.46147 4.84615Z" fill="white"/>
<path d="M14.5387 4.84615C14.3245 4.84615 14.1191 4.76106 13.9676 4.60959C13.8161 4.45811 13.731 4.25267 13.731 4.03846V0.807692C13.731 0.593479 13.8161 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3245 0 14.5387 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2613 0.388039 15.3464 0.593479 15.3464 0.807692V4.03846C15.3464 4.25267 15.2613 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5387 4.84615Z" fill="white"/>
</svg> <?php echo get_the_date('j M Y'); ?> </p>
                                    </div>
                                    <div class="bottom hideThis">
                                        <div class="row">
                                            <div class="col-1"></div>
                                            <div class="col-10 fnt-GE-SS-Two">
                                            <button data-bs-toggle="modal" data-bs-target="#myModal" class="d-none" id="modal_id_post"> hide me</button>
                                                <center><span class="btn btn-slider btn-warning btn-yellow w-100 popme_up_mi" post_id='<?php echo get_the_ID();?>'>أقرا المزيد</span></center>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $count++; // Increment the counter
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <button class="carousel-control-prev justify-content-end" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <i class='fa fa-chevron-left fnt-yellow fnt-30'></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next justify-content-start" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <i class='fa fa-chevron-right fnt-yellow fnt-30'></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="spacer-120"></div>
<?php endif; ?>



<!-- Gallery sections -->
<div class="col-md-10 mitabs" id="gallerySect" style="display: none;">
    <?php if(wp_is_mobile()): ?>
        <div id="gallCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $count = 0; // Counter to identify the first item
                if (have_rows('media_center_gallery_ar')) :
                    while (have_rows('media_center_gallery_ar')) : the_row();
                ?>
                        <div class="carousel-item <?php if ($count == 0) echo 'active'; ?>">
                            <div class=" mc-content-ar">
                                <div class="col-md-4">
                                    <div class="mc-content" data-bs-toggle="modal" data-bs-target="#galleryModel" data-image="<?php echo get_sub_field('image'); ?>">
                                        <img src="<?php echo get_sub_field('image'); ?>" class="mc-img img-fluid w-100">
                                        <div class="mc-caption mobile-text-start mobile-mc-caption-height-40 mobile-mc-caption-padding">
                                            <div class="top showThis">
                                                <h5><?php echo get_sub_field('title'); ?></h5>
                                                <!-- <div class="spacer-10"></div> -->
                                                <p class="mc-date fnt-12"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 15 28" fill="none">
<path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="white"/>
<path d="M16.9612 17.7689H13.7305C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0079 17.3809 12.9228 17.1754 12.9228 16.9612V13.7305C12.9228 13.5162 13.0079 13.3108 13.1593 13.1593C13.3108 13.0079 13.5162 12.9228 13.7305 12.9228H16.9612C17.1754 12.9228 17.3809 13.0079 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7305V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3809 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="white"/>
<path d="M20.1923 8.07675H0.807692C0.593479 8.07675 0.388039 7.99165 0.236568 7.84018C0.0850959 7.68871 0 7.48327 0 7.26906C0 7.05484 0.0850959 6.8494 0.236568 6.69793C0.388039 6.54646 0.593479 6.46136 0.807692 6.46136H20.1923C20.4065 6.46136 20.612 6.54646 20.7634 6.69793C20.9149 6.8494 21 7.05484 21 7.26906C21 7.48327 20.9149 7.68871 20.7634 7.84018C20.612 7.99165 20.4065 8.07675 20.1923 8.07675Z" fill="white"/>
<path d="M6.46147 4.84615C6.24726 4.84615 6.04182 4.76106 5.89035 4.60959C5.73887 4.45811 5.65378 4.25267 5.65378 4.03846V0.807692C5.65378 0.593479 5.73887 0.388039 5.89035 0.236568C6.04182 0.0850959 6.24726 0 6.46147 0C6.67568 0 6.88112 0.0850959 7.03259 0.236568C7.18407 0.388039 7.26916 0.593479 7.26916 0.807692V4.03846C7.26916 4.25267 7.18407 4.45811 7.03259 4.60959C6.88112 4.76106 6.67568 4.84615 6.46147 4.84615Z" fill="white"/>
<path d="M14.5387 4.84615C14.3245 4.84615 14.1191 4.76106 13.9676 4.60959C13.8161 4.45811 13.731 4.25267 13.731 4.03846V0.807692C13.731 0.593479 13.8161 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3245 0 14.5387 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2613 0.388039 15.3464 0.593479 15.3464 0.807692V4.03846C15.3464 4.25267 15.2613 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5387 4.84615Z" fill="white"/>
</svg><?php echo get_sub_field('date'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        $count++; // Increment the counter
                    endwhile;
                endif;
                ?>
            </div>
            <button class="carousel-control-prev justify-content-end" type="button" data-bs-target="#gallCarousel" data-bs-slide="prev">
                <i class='fa fa-chevron-left fnt-yellow fnt-30'></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next justify-content-start" type="button" data-bs-target="#gallCarousel" data-bs-slide="next">
                <i class='fa fa-chevron-right fnt-yellow fnt-30'></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php else: ?>
        <!-- Display non-carousel content for non-mobile devices -->
        <div id="mc-list" class="row">
            <?php
            if (have_rows('media_center_gallery_ar')) :
                while (have_rows('media_center_gallery_ar')) : the_row();
            ?>
                    <div class="col-md-4">
                    <a href="" onclick="event.preventDefault();"> <div class="mc-content" data-bs-toggle="modal" data-bs-target="#galleryModel" data-image="<?php echo get_sub_field('image'); ?>">
                            <img src="<?php echo get_sub_field('image'); ?>" class="mc-img img-fluid w-100">
                            <div class="mc-caption mobile-text-end mobile-mc-caption-height-40 mobile-mc-caption-padding">
                                <div class="top showThis">
                                    <h5><?php echo get_sub_field('title'); ?></h5>
                                    <div class="spacer-10"></div>
                                    <p class="mc-date fnt-12"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 25 28" fill="none">
<path d="M16.9615 20.9998H4.03846C2.96739 20.9998 1.9402 20.5743 1.18284 19.8169C0.42548 19.0596 0 18.0324 0 16.9613V5.65364C0 4.58257 0.42548 3.55537 1.18284 2.79801C1.9402 2.04065 2.96739 1.61517 4.03846 1.61517H16.9615C18.0326 1.61517 19.0598 2.04065 19.8172 2.79801C20.5745 3.55537 21 4.58257 21 5.65364V16.9613C21 18.0324 20.5745 19.0596 19.8172 19.8169C19.0598 20.5743 18.0326 20.9998 16.9615 20.9998ZM4.03846 3.23056C3.39582 3.23056 2.7795 3.48585 2.32509 3.94026C1.87067 4.39468 1.61538 5.01099 1.61538 5.65364V16.9613C1.61538 17.604 1.87067 18.2203 2.32509 18.6747C2.7795 19.1291 3.39582 19.3844 4.03846 19.3844H16.9615C17.6042 19.3844 18.2205 19.1291 18.6749 18.6747C19.1293 18.2203 19.3846 17.604 19.3846 16.9613V5.65364C19.3846 5.01099 19.1293 4.39468 18.6749 3.94026C18.2205 3.48585 17.6042 3.23056 16.9615 3.23056H4.03846Z" fill="white"/>
<path d="M16.9612 17.7689H13.7305C13.5162 17.7689 13.3108 17.6838 13.1593 17.5323C13.0079 17.3809 12.9228 17.1754 12.9228 16.9612V13.7305C12.9228 13.5162 13.0079 13.3108 13.1593 13.1593C13.3108 13.0079 13.5162 12.9228 13.7305 12.9228H16.9612C17.1754 12.9228 17.3809 13.0079 17.5323 13.1593C17.6838 13.3108 17.7689 13.5162 17.7689 13.7305V16.9612C17.7689 17.1754 17.6838 17.3809 17.5323 17.5323C17.3809 17.6838 17.1754 17.7689 16.9612 17.7689ZM14.5381 16.1535H16.1535V14.5381H14.5381V16.1535Z" fill="white"/>
<path d="M20.1923 8.07675H0.807692C0.593479 8.07675 0.388039 7.99165 0.236568 7.84018C0.0850959 7.68871 0 7.48327 0 7.26906C0 7.05484 0.0850959 6.8494 0.236568 6.69793C0.388039 6.54646 0.593479 6.46136 0.807692 6.46136H20.1923C20.4065 6.46136 20.612 6.54646 20.7634 6.69793C20.9149 6.8494 21 7.05484 21 7.26906C21 7.48327 20.9149 7.68871 20.7634 7.84018C20.612 7.99165 20.4065 8.07675 20.1923 8.07675Z" fill="white"/>
<path d="M6.46147 4.84615C6.24726 4.84615 6.04182 4.76106 5.89035 4.60959C5.73887 4.45811 5.65378 4.25267 5.65378 4.03846V0.807692C5.65378 0.593479 5.73887 0.388039 5.89035 0.236568C6.04182 0.0850959 6.24726 0 6.46147 0C6.67568 0 6.88112 0.0850959 7.03259 0.236568C7.18407 0.388039 7.26916 0.593479 7.26916 0.807692V4.03846C7.26916 4.25267 7.18407 4.45811 7.03259 4.60959C6.88112 4.76106 6.67568 4.84615 6.46147 4.84615Z" fill="white"/>
<path d="M14.5387 4.84615C14.3245 4.84615 14.1191 4.76106 13.9676 4.60959C13.8161 4.45811 13.731 4.25267 13.731 4.03846V0.807692C13.731 0.593479 13.8161 0.388039 13.9676 0.236568C14.1191 0.0850959 14.3245 0 14.5387 0C14.753 0 14.9584 0.0850959 15.1099 0.236568C15.2613 0.388039 15.3464 0.593479 15.3464 0.807692V4.03846C15.3464 4.25267 15.2613 4.45811 15.1099 4.60959C14.9584 4.76106 14.753 4.84615 14.5387 4.84615Z" fill="white"/>
</svg><?php echo get_sub_field('date'); ?></p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    <?php endif; ?>
</div>



        </div>
      </div>

      
    </div>
    
  </section>

  <!-- The Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content mi_width_900 rounded-4">
      
      <div id="currentpop">

      </div>
      <!-- Modal Header -->


      <!-- Modal body -->

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>

<!-- ********* Gallery Model ********* -->
<div class="modal fade" id="galleryModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content mi_width_900 rounded-4">
      <img id="modalImage" class="mc-img img-fluid rounded-4">
    </div>
  </div>
</div>
  


  <?php ?>
</div>
<?php get_footer(); ?>

<script>
      document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.mc-content');
    const modalImage = document.getElementById('modalImage');

    galleryItems.forEach(item => {
      item.addEventListener('click', function(e) {
        const imageUrl = this.getAttribute('data-image');
        console.log(imageUrl);
        console.log(modalImage);
        modalImage.setAttribute('src', imageUrl);
      });
    });
  });
    // Activate news carousel
    $('#newsCarousel').carousel();

    // Activate gallery carousel
    $('#gallCarousel').carousel();
</script>