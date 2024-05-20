<!-- <div class="container px-0" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">
<h3 class="fnt-white d-flex align-items-center justify-content-center justify-content-md-start global-heading-white">
                <img src="<?php echo get_field('service_section_heading_icons'); ?>" class="img-fluid fa-mar-right-22">
                <?php echo get_field('service_section_heading'); ?> -->
<?php
$lang = pll_current_language();
?>
<div class="container px-0 max_width_80">


  <div class="spacer-20"></div>
  <!-- <div> -->
  <?php if ($lang == 'en') { ?>
    <h3 class="fnt-white d-flex mb-5 align-items-center  justify-content-md-start global-heading-white mobile_font_24">
      <img src="<?php echo get_field('home_footer_heading_image_en', 'option'); ?>" class="img-fluid fa-mar-right-22">
      <?php echo get_field('home_footer_heading_en', 'option'); ?>
    </h3>
  <?php } else { ?>
    <h3 class="fnt-white d-flex mb-5 align-items-center  justify-content-md-start global-heading-white mobile_font_24">
      <img src="<?php echo get_field('home_footer_heading_image_ar', 'option'); ?>" class="img-fluid fa-mar-left-22">
      <?php echo get_field('home_footer_heading_ar', 'option'); ?>
    </h3>
  <?php } ?>
  <div class="row mi-row-footer-contactus bg-white mi_border_60" id="home_contact_form_mi" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">

    <div class="col-md-5 bg_changeable_white contactus-form-footer px-0 mi_border_60 tab-pd-top-bottom">
      <div class="form_wrapperdiv">

        <?php if (pll_current_language() == 'ar') {

          echo do_shortcode('[contact-form-7 id="d328b58" title="Contact US_AR"]');
        } else {
          echo do_shortcode('[contact-form-7 id="34c5ac8" title="Contact US"]');
        } ?>

        <!-- <form action="">
         <input type="text" class="form-control cu-control" placeholder="Name" />
         <div class="spacer-10"></div>

         <input type="tel" class="form-control cu-control" placeholder="Phone Number"/>
         <div class="spacer-10"></div>

         <input type="email" class="form-control cu-control" placeholder="Email"/>
         <div class="spacer-10"></div>

         <textarea name="" id="" cols="30" rows="10" class="form-control cu-control" placeholder="Message">
         </textarea>
         <div class="spacer-10"></div>

         <button class="btn btn-warning btn-yellow w-100">Send <i class="fa-solid fa-location-arrow"></i></button>

       </form> -->

        <!-- <div class="spacer-20"></div> -->

        <div class="row mbl-w-200 mx-0 ">
          <div class="col-md-6 px-0 ipad-w-100 col-6">

            <a class="fnt-blue fnt-GE-SS-Two-rg desktop_var_font_20 mi-leading-26 mobile_font_10 dir-chng_mi" href="tel:<?php echo preg_replace('/\s+/', '', get_field("phone", "option")); ?>"><i class="fa-solid fa-phone fa-mar-left-12 mrgn-rt-5 icon-order"></i><?php echo get_field("phone", "option"); ?></a>

          </div>
          <div class="col-md-6 px-0 ipad-w-100 col-6 text_align_lefts ">

            <a class="fnt-blue fnt-GE-SS-Two mobile_font_10 desktop_var_font_20 mi-leading-26 px-0" href="mailto:<?php echo  get_field("email", "option"); ?>"><i class="fa-solid fa-envelope fa-mar-left-12 mrgn-rt-5"></i><?php echo get_field("email", "option"); ?></a>

          </div>

        </div>
      </div>



    </div>
    <div class="col-md-7 mapbox-containers footer-mapbox-container-ar remPad bg-white mi_bordersi_60 max_height_332" id="home_contact_form_mi">

      <div id="map"></div>

    </div>

  </div>
  <!-- </div> -->


</div>