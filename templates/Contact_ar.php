<?php /* Template Name: Contact Us Arabic*/

get_header();

?>
<div data-scroll-container>


  <section class="flipped" data-scroll-section>

    <div class="container-fluid" id="contact_mi_mb">
      <div class="spacer-120 d-none d-md-block"></div>
      <div id="contact_ar_top_space"></div>
      <div class="spacer-60"></div>
      <div class="spacer-20"></div>
      <div class="container px-0">
        <h3 class="fnt-blue d-flex align-items-center global-heading-blue-ar fnt-GE-SS-Two hd-margin-rt" id="hd_size_mi">
          <img src="<?php echo get_field("heading_icon_ar"); ?>" class="img-fluid fa-mar-left-20">
          <?php echo get_field("heading_text_ar"); ?>
        </h3>
        <div class="spacer-60"></div>

        <div class="row contactus_col_ar" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3"id="mrg-top-ar">

          <div class="col-md-5 remPad bg-light-white contactus-form contactus-form_ar contactus-form-responsive contct-frm-ar-pg ipad-margin-right" id="f-style-ar">
            <div class="form_wrapper_ar">



              <?php echo do_shortcode('[contact-form-7 id="d328b58" title="Contact US_AR"]') ?>
              <div class="row rw_mrgin mx-0">
                <div class="col-md-6 px-0 dir-chng col-pd-1 justify-content-end" id="col-style">

                  <a class="fnt-blue mi-leading-26 pd-rt fnt-size-18" id="col-rev" href="tel:<?php echo trim(get_field("phone_number_ar")); ?>"><?php echo get_field("phone_number_ar"); ?><i class="fa-solid fa-phone fa-mar-right-5 margin-rt-10"></i></a>

                </div>

                <div class="col-md-6 px-0 col-pd" id="col-style_em">

                  <a class="fnt-blue mi-leading-26 pd-rt-email fnt-size-18" href="mailto:<?php echo trim(get_field("email_ar")); ?>"><i class="fa-solid fa-envelope fa-mar-right-5 margin-rt-10"></i> <?php echo get_field("email_ar"); ?></a>

                </div>
              </div>
            </div>



          </div>
          <div class="col-md-7 mapbox-container remPad bg-light-white contactus-map-responsive map-contct-pg" id="contact_ar_map">

            <div id="map"></div>

          </div>

        </div>




      </div>

      <!-- <div class="spacer-40"></div> -->
      <div class="spacer-120"></div>
    </div>


  </section>


  <?php ?>

</div>

<?php ?>

<?php get_footer(); ?>