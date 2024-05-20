
<?php /* Template Name: Contact Us */

get_header();

?>

<style>

</style>

<div data-scroll-container>
  <section class="" data-scroll-section>

    <div class="container-fluid bg-white" id="mi_pd_lr_cntct_30">
      <div class="spacer-120 d-none d-md-block"></div>
      <div class="spacer-60 mobile-spacer-70"></div>

      <div class="container px-0" id="">
        <h3 class="text-color-blue d-flex align-items-center global-heading-blue justify-content-md-start" id="hd_size_mi">
          <img src="<?php echo get_field("heading_icon"); ?>" class="img-fluid fa-mar-right-20">
          <?php echo get_field("heading_text"); ?>
        </h3>
        <div class="spacer-40"></div>

        <div class="d-flex flex-column flex-md-row contactus_cols mx-0 ipad-flex-wrap" id="fm-contact-en"data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">

          <div class="mi_mx_43 mi_maxh_490 bg-light-white mi_radius_shadow  contactus-form-responsive px-0 ipad-margin-left-90 w-width"id="frm_style">
            <div class="form_wrapper">
              <?php echo do_shortcode('[contact-form-7 id="34c5ac8" title="Contact US"]') ?>
              <div class="row rw_mrgin mx-0">
                <div class="col-md-6 px-0 col-12"id="col-style">
                
                    <a class="mb-0 fnt-blue global-content-blue d-flex mi-gap-12 justify-content-center align-items-center pd-rt fnt-size-14" href="mailto:<?php echo trim(get_field("email")); ?>"> <?php echo get_field("email"); ?> <i class="fa-solid fa-envelope fa-mar-right-5"></i></a>
                
                </div>
                <div class="col-md-6 px-0"id="col-style">
                  
                    <a class="fnt-blue ph_cls global-content-blue d-flex mi-gap-12 mi_ml_14 justify-content-center align-items-center fnt-size-14" href="tel:<?php echo trim(get_field("phone_number")); ?>"><?php echo get_field("phone_number"); ?> <i class="fa-solid fa-phone fa-mar-right-5"></i></a>
                
                </div>

              </div>
            </div>
          </div>
          <div class="mi_max_57  mapbox-container remPad  contactus-map-responsive" id="contact_en_map">

            <div id="map" class="city-fm"></div>

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