<?php /* Template Name: Service Template */

get_header();

?>
<!--header-->


<div data-scroll-container>

  <section class="non-vh  posRel-zIndex serviceEndSlider " data-scroll-section>

    <div class="container-fluid bg-white" id="mi_pd_lr_30">
      <div class="spacer-80 d-none d-md-block"></div>
      <div class="topSpacer"></div>

      <div class="container px-0">
        <h3 class="fnt-blue d-flex align-items-center global-heading-blue justify-content-md-start" id="hd_size_mi">
          <img src="<?php echo get_field("heading_icon"); ?>" class="img-fluid fa-mar-right-20">
          <?php echo get_field("heading_text"); ?>
        </h3>
        <div class="spacer-40 d-md-none"></div>

        <div class="services-thumbs services-inner" id="service_slider_mi">
          <div class="row d-md-none mirelative ">
            <div id="carouselExample" class="carousel carousel-dark slide mobile_align_centre">
              <div class="carousel-inner mobile_w_80">
                <?php
                // Check rows exists.
                if (have_rows('services')) :
                  // Loop through rows.
                  $i = 0;
                  while (have_rows('services')) : the_row();
                ?>
                    <div class="carousel-item mi_shadow_over_item topCarousel <?php echo $i === 0 ? 'active' : ''; ?> position-relative">
                      <center>
                        <!-- <div class="featured_img_overlay"></div> -->
                        <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="<?php echo $i ?>">
                          <img src="<?php echo get_sub_field('service_thumbnail'); ?>" class="img-fluid img-services-en captionImg">
                        
                        <p class="caption fnt-white global-pr-heading-white px-1 captionText mi_line_31"><?php echo get_sub_field('service_title'); ?></p>
                        </a>
                      </center>
                    </div>
                <?php
                    $i++;
                  endwhile; // end while have rows
                endif; // end if have rows
                ?>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <!-- <span class="carousel-control-prev-icon carouselIconRight mobile_icon_grey" aria-hidden="true"></span> -->
              <i class='fa fa-chevron-left fnt-blue fnt-30'></i>


              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <!-- <span class="carousel-control-next-icon carouselIconLeft mobile_icon_grey" aria-hidden="true"></span> -->
              <i class='fa fa-chevron-right fnt-blue fnt-30'></i>

              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="row d-none d-md-flex mx-auto mt-5 gap-3">
            <?php // Check rows exists.
            if (have_rows('services')) :
              // Loop through rows.
              $i = 0;
              while (have_rows('services')) : the_row();
            ?>
                <div class="item-thumb col px-0">

                  <center>
                    <div class="topCarousel">

                      <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="<?php echo $i ?>" class="">

                        <img src="<?php echo get_sub_field('service_thumbnail'); ?>" class="img-fluid img-services-en captionImg">
                      <p class="caption fnt-white global-pr-heading-white px-1"><?php echo get_sub_field('service_title'); ?></p>
                      </a>
                    </div>
                  </center>
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php endif; ?>

            <!-- <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="1">
                    <img src="img/services/service1.jpg" class="img-fluid">
                  </a>
                  <p class="caption fnt-white">Suppliers</p>
                </center>
              </div> 

              <div class="caption item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="2">
                    <img src="img/services/service2.jpg" class="img-fluid">
                  </a>
                  <p class="caption fnt-white">Supermarket</p>
                </center>
              </div> 

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="3" data-thumb="serv-3">
                    <img src="img/services/service3.jpg" class="img-fluid">
                  </a>
                  <p class="caption fnt-white">Hotels and Restaurants</p>
                </center>
              </div>

              <div class="item-thumb col">
                <center>
                  <a href="" data-bs-target="#servicesCarousel" data-bs-slide-to="4" data-thumb="serv-4">
                    <img src="img/services/service4.jpg" class="img-fluid">
                  </a>
                  <p class="caption fnt-white">Family Products</p>
                </center>
              </div>                                         -->

          </div>

        </div>
      </div>

    </div>


  </section>





  <section   id="serviveoverfloehidden" class="serviceEndSlider desktopviewSlider" data-scroll-section>
    <?php if(!wp_is_mobile()) { ?>
    <div class="container-fluid" id="services_en_descr">
      <div class="spacer-120 d-none"></div>

      <div class="container mi_margin_top_184">

        <div id="servicesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php  // Check rows exists.
            if (have_rows('services')) :
              $i = 0;
              // Loop through rows.
              while (have_rows('services')) : the_row();
                // Set the active class for the first item.
                $active_class = ($i == 0) ? 'active' : '';
            ?>

                <div class="carousel-item posRel <?php echo esc_attr($active_class); ?>" data-bs-interval="10000">
                  <div class="row">
                    <div class="col-md-6 des-ser-en mi_mb_90">
                      <h4 class="global-heading-bluecolor sideMenuHeading d-flex align-items-center global-pheading-blue justify-content-md-start mobile_display_none">
                        <img src="<?php echo get_sub_field('service_icon'); ?>" class="img-fluid fa-mar-right-20 service-icon-en">
                        <?php echo get_sub_field('service_title'); ?>
                      </h4>
                      <!-- <div class="spacer-20 d-md-none"></div> -->
                      <div class="text-md-left text-sm-start servicesText"><?php echo get_sub_field('service_descritption'); ?></div>
                    </div>
                    <div class="col-md-6  sideMenu ">
                      <img src="<?php echo get_sub_field('service_featured_image'); ?>" class="d-block w-100 service-featured-img service_mobile_ft_img">
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

      <!-- <div class="spacer-120 d-md-none"></div> -->
    </div>
    <?php }else {?>

      <div class="container-fluid" id="services_en_descr">
      <div class="spacer-120 d-none"></div>

      <div class="container mi_margin_top_184">

        <div id="servicesCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php  // Check rows exists.
            if (have_rows('services')) :
              $i = 0;
              // Loop through rows.
              while (have_rows('services')) : the_row();
                // Set the active class for the first item.
                $active_class = ($i == 0) ? 'active' : '';
            ?>

                <div class="carousel-item posRel <?php echo esc_attr($active_class); ?>" data-bs-interval="10000" id="service_mb_content">
                  <div class="row">
                    <div class="col-md-6 des-ser-en mi_mb_90">
                      <h4 class="global-heading-bluecolor sideMenuHeading d-flex align-items-center global-pheading-blue justify-content-md-start mobile_display_none">
                        <img src="<?php echo get_sub_field('service_icon'); ?>" class="img-fluid fa-mar-right-20 service-icon-en">
                        <?php echo get_sub_field('service_title'); ?>
                      </h4>
                      <!-- <div class="spacer-20 d-md-none"></div> -->
                      <div class="text-md-left text-sm-start servicesText"><?php echo get_sub_field('service_descritption'); ?></div>
                    </div>
                    <div class="row" id="service_mb_img">
                      <div class="col-9">
                      <div class="text-md-left text-sm-start servicesText"><?php echo get_sub_field('service_descritption_with_picture'); ?></div>
                      </div>
                    <div class="col-3  sideMenu ">
                      <img src="<?php echo get_sub_field('service_featured_image'); ?>" class="d-block w-100 service-featured-img service_mobile_ft_img">
                    </div>
                    </div>
                    <div class="text-md-left text-sm-start servicesText"><?php echo get_sub_field('service_descritption_after_picture'); ?></div>
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

      <!-- <div class="spacer-120 d-md-none"></div> -->
    </div>

      <?php } ?>

  </section>



  <section class="non-parallax mi_mt_70  posRel-zIndex serviceEndSlider endSlider px-3" style=" background-image: url('<?php echo get_field("bg_image"); ?>')" data-scroll-section>

    <!-- <div class="spacer-120 d-md-none"></div> -->

    <div class="container" style="padding:70px 20px 65px 20px">
      <?php
      $images = get_field('slider_gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if ($images) : ?>

        <div id="services-slider" class="owl-carousel">
          <?php foreach ($images as $image) : ?>

            <div class="slide-item">
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="br-rad-shadowed img_height_565" />
            </div>
          <?php endforeach; ?>

        </div>
      <?php endif; ?>

    </div>

    <!-- <div class="spacer-120 d-md-none"></div> -->
  </section>
</div>
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

<!-- <script>
    jQuery(document).ready(function(){

      jQuery('#services-slider').owlCarousel({
        loop: true,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        navText: ["<i class='fa fa-chevron-left fnt-yellow fnt-30'></i>","<i class='fa fa-chevron-right fnt-yellow fnt-30'></i>"],
        nav: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
          },
          600: {
            items: 2,
            nav: true
          },
          1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 20,
          }
        }
      });      

       

    });
  </script> -->
<!-- <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="fnt-blue d-flex align-items-center">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Suppliers
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                    
                  </div>
                  <div class="col-md-6  sideMenu">
                   <img src="img/services/menu2-en.png" class="d-block w-100" >
                  </div>
                </div>
              </div>

              <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="fnt-blue d-flex align-items-center">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Supermarket
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 posRel sideMenu">
                   <img src="img/services/menu1-en.png" class="d-block w-100" >
                  </div>
                </div>
              </div>

              <div class="carousel-item  posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="fnt-blue d-flex align-items-center">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Hotels and Restaurants
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 sideMenu">
                    <img src="img/services/menu2-en.png" class="d-block w-100">
                  </div>
                </div>
              </div>

              <div class="carousel-item posRel" data-bs-interval="10000">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="fnt-blue d-flex align-items-center">
                      <img src="img/drop-yellow-en.svg" class="img-fluid fa-mar-right-20"> 
                     Family Products
                    </h4>
                    <div class="spacer-20"></div>
                    <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                     <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>

                      <p>Lorem ipsum dolor sit amet consectetur. Egestas mauris mi nulla sed varius sit libero massa. Ipsum ut pellentesque quisque mi. Consectetur volutpat molestie odio lectus semper dignissim diam.</p>                          
                  </div>
                  <div class="col-md-6 sideMenu">
                   <img src="img/services/menu1-en.png" class="d-block w-100">
                  </div>
                </div>
              </div>                             -->

<?php get_footer(); ?>