<?php /* Template Name: Service Arabic Template */

get_header();

?>
<style>

</style>
<!--header-->
<div data-scroll-container>


  <section class="non-vh  posRel-zIndex flipped  servicesSection" data-scroll-section>

    <div class="container-fluid" id="mi_pd_lr_30">
      <div class="spacer-80 d-none d-md-block"></div>
      <div class="topSpacer" id="mi_top_spacer"></div>

      <div class="container pr-0">
        <h3 class="fnt-blue d-flex align-items-center global-heading-blue-ar justify-content-md-start fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold" id="hd_size_mi">
          <img src="<?php echo get_field("heading_icon_ar"); ?>" class="img-fluid fa-mar-left-20">
          <?php echo get_field("heading_text_ar"); ?>
        </h3>
        <div class="spacer-20 d-md-none" id="mi_mb_none"></div>

        <div class="services-thumbs services-inner" id="service_slider_mi">
          <div class="row d-block d-md-none mirelative">
            <div id="carouselExample" class="carousel carousel-dark slide mobile_align_centre">
              <div class="carousel-inner mobile_w_80">
                <?php
                // Check rows exist.
                if (have_rows('services_ar')) :
                  // Loop through rows.
                  $i = 0;
                  while (have_rows('services_ar')) : the_row();
                ?>
                    <div class="carousel-item  <?php echo $i === 0 ? 'active' : ''; ?>">
                      <!-- <div class="row"> -->
                      <div class="col item-thumb item-thumb-arb topCarousel topCarousel-service-ar px-0  position-relative">
                        <center>
                          <a href="" data-bs-target="#servicesCarousel" class="w-100 h-100" data-bs-slide-to="<?php echo $i ?>">
                            <img src="<?php echo get_sub_field('service_thumbnail_ar'); ?>" class="img-fluid captionImg services-card-img">
                          
                          <p class="caption fnt-white global-pr-heading-white-ar captionText"><?php echo get_sub_field('service_title_ar'); ?></p>
                          </a>
                        </center>
                      </div>
                      <!-- </div> -->
                    </div>
                <?php
                    $i++;
                  endwhile; // end while have rows
                endif; // end if have rows
                ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <i class='fa fa-chevron-left fnt-blue fnt-30'></i>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <i class='fa fa-chevron-right fnt-blue fnt-30'></i>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

          <div class="row d-none d-md-flex">
            <?php // Check rows exists.
            if (have_rows('services_ar')) :
              // Loop through rows.
              $i = 0;
              while (have_rows('services_ar')) : the_row();
            ?>
                <div class="item-thumb col item-thumb-arb" style="padding-left: 0px;padding-right:13px; padding-top:54px;">
                  <center>
                    <div class="topCarousel">

                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="<?php echo $i ?>">

                        <img src="<?php echo get_sub_field('service_thumbnail_ar'); ?>" class="img-fluid captionImg">
                      
                      <p class="caption fnt-white global-pr-heading-white-ar pd-top-20"><?php echo get_sub_field('service_title_ar'); ?></p>
                      </a>
                    </div>
                  </center>
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>


      </div>

    </div>

  </section>

  <section class=" flipped servicesSection servicesSlider desktopviewSlider" data-scroll-section id="serviveoverfloehidden">
  <?php if(!wp_is_mobile()) { ?>
    <div class="container-fluid" id="mi_service_desc">
      <!-- <div class="spacer-100"></div> -->
      <div class="spacer-60"></div>
      <div class="container px-0">

        <div id="servicesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php  // Check rows exists.
            if (have_rows('services_ar')) :
              $i = 0;
              // Loop through rows.
              while (have_rows('services_ar')) : the_row();
                // Set the active class for the first item.
                $active_class = ($i == 0) ? 'active' : '';
            ?>

                <div class="carousel-item posRel <?php echo esc_attr($active_class); ?>" data-bs-interval="10000">
                  <div class="row">
                    <div class="col-md-6 des-ser-en text-md-end mi-services-main px-0">
                      <h4 class="fnt-blue sideMenuHeading d-flex align-items-center global-pheading-blue-ar justify-content-md-start fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold mobile_display_none">
                        <img src="<?php echo get_sub_field('service_icon'); ?>" class="img-fluid fa-mar-left-20 middHeadingIcon">
                        <?php echo get_sub_field('service_title_ar'); ?>
                      </h4>
                      <!-- <div class="spacer-20 d-md-none"></div> -->
                      <p class="sideMenuText "><?php echo get_sub_field('service_descritption'); ?></p>
                    </div>
                    <div class="col-md-6 sideMenu sidemenu_ar">
                      <img src="<?php echo get_sub_field('service_featured_image'); ?>" class="d-block w-100 ">
                    </div>
                  </div>
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="hideThis">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>

      <div class="spacer-100 d-md-none" id="mi_mb_none"></div>
    </div>
    <?php }else {?>

      <div class="container-fluid" id="mi_service_desc">
      <!-- <div class="spacer-100"></div> -->
      <div class="spacer-60"></div>
      <div class="container px-0">

        <div id="servicesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php  // Check rows exists.
            if (have_rows('services_ar')) :
              $i = 0;
              // Loop through rows.
              while (have_rows('services_ar')) : the_row();
                // Set the active class for the first item.
                $active_class = ($i == 0) ? 'active' : '';
            ?>

                <div class="carousel-item posRel <?php echo esc_attr($active_class); ?>" data-bs-interval="10000" id="service_mb_content_ar">
                  <div class="row px-0 mx-0">
                    <div class="col-md-6 des-ser-en text-md-end mi-services-main px-0">
                      <h4 class="fnt-blue sideMenuHeading d-flex align-items-center global-pheading-blue-ar justify-content-md-start fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold mobile_display_none">
                        <img src="<?php echo get_sub_field('service_icon'); ?>" class="img-fluid fa-mar-left-20 middHeadingIcon">
                        <?php echo get_sub_field('service_title_ar'); ?>
                      </h4>
                      <!-- <div class="spacer-20 d-md-none"></div> -->
                      <p class="sideMenuText "><?php echo get_sub_field('service_descritption'); ?></p>
                    </div>
                    <div class="row px-0 mx-0" id="service_mb_img_ar">
                      <div class="col-7">
                      <p class="sideMenuText "><?php echo get_sub_field('service_descritption_with_picture'); ?></p>
                      </div>
                    <div class="col-5 sideMenu sidemenu_ar">
                      <img src="<?php echo get_sub_field('service_featured_image'); ?>" class="d-block w-100 ">
                    </div>
                  </div>
                  <p class="sideMenuText "><?php echo get_sub_field('service_descritption_after_picture'); ?></p>
                  </div>
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="hideThis">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

      </div>

      <div class="spacer-100 d-md-none" id="mi_mb_none"></div>
    </div>


      <?php } ?>

  </section>

  <section class="non-parallax  posRel-zIndex posRel-zIndex-1 serviceEndSlider endSlider py-5 ar_mi_mt_70" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('<?php echo get_field("bg_image_ar"); ?>')" data-scroll-section>

    <!-- <div class="spacer-120 d-md-none"></div> -->

    <div class="container" id="mi_pd_lr_30">
      <?php
      $images = get_field('slider_gallery_ar');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($images) : ?>

        <div id="services-slider" class="owl-carousel owl-arrow-right px-0">
          <?php foreach ($images as $image) : ?>

            <div class="slide-item">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid br-rad-shadowed" />
            </div>
          <?php endforeach; ?>

          <!-- <div class="slide-item">
      <img src="img/services/slide-2.jpg" class="img-fluid br-rad-shadowed">
    </div>

    <div class="slide-item">
      <img src="img/services/slide-3.jpg" class="img-fluid br-rad-shadowed">
    </div>  

    <div class="slide-item">
      <img src="img/services/slide-2.jpg" class="img-fluid br-rad-shadowed">
    </div>                       -->

        </div>
      <?php endif; ?>

    </div>

    <!-- <div class="spacer-120 d-md-none"></div> -->
  </section>
<!-- 
  <script>
    jQuery(document).ready(function($){
      $('#services-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
    })

  </script> -->
  <script>
document.addEventListener("DOMContentLoaded", function() {
  const thumbnailCarousel = $('#carouselExample');
  const detailCarousel = $('#servicesCarousel');

  thumbnailCarousel.on('slid.bs.carousel', function() {
    if (!detailCarousel.hasClass('sliding')) {
      const index = $('.carousel-item.active', thumbnailCarousel).index();
      detailCarousel.addClass('sliding').carousel(index);
    }
  });

  detailCarousel.on('slid.bs.carousel', function() {
    if (!thumbnailCarousel.hasClass('sliding')) {
      const index = $('.carousel-item.active', detailCarousel).index();
      thumbnailCarousel.addClass('sliding').carousel(index);
    }
  });

  thumbnailCarousel.on('slide.bs.carousel', function() {
    detailCarousel.addClass('sliding');
  });

  detailCarousel.on('slide.bs.carousel', function() {
    thumbnailCarousel.addClass('sliding');
  });

  thumbnailCarousel.on('slid.bs.carousel', function() {
    detailCarousel.removeClass('sliding');
  });

  detailCarousel.on('slid.bs.carousel', function() {
    thumbnailCarousel.removeClass('sliding');
  });
});

</script>
  <?php get_footer(); ?>