<?php /* Template Name: Distributors Template */

get_header();

?>


<div data-scroll-container>


  <section class="non-vh" data-scroll-section>

    <div class="container-fluid" id="distributor_en_hero_sect">
      <div class="spacer-120 d-none d-md-block"></div>
      <div class="spacer-40"id="top-space-2"></div>

      <div class="container distributor-en px-0">
      <div class="spacer-47  d-md-block"id="top-spacer-en"></div>
        <h3 class="d-flex justify-content-md-start global-heading-blue global-heading-bluecolor h3-responsive align-items-center"id="dist-fnt-size" style="color: #27318B !important">
       
          <img src="<?php echo get_field("heading_icon"); ?>" class="img-fluid fa-mar-right-20" style="transform: scaleX(-1)">
       
          <?php echo get_field("heading_text"); ?>
        </h3>
        <div class="spacer-40"id="mob-dist-spacer"></div>
        <div class="spacer-32  d-md-block"></div>

        <div class="mi_para_color mi_font_25  text-md-justify  fnt-size-en"><?php echo get_field("description"); ?></div>
        <div class="spacer-40"id="mob-dist-spacer"></div>
        <div class="img-mb-en">
        <img src="<?php echo get_field("featured_image"); ?>" class="img-fluid w-100 br-rad-shadowed br-rad-shadowed-responsive">
        </div>

      </div>

    </div>

  </section>

  <section class="distributor-responsive app-form-section" data-scroll-section>

    <div class="container-fluid bg-white" id="distributor_en_form_sect">
      <div class="spacer-57"></div>

      <div class="container px-0">
        <h3 class="h3-responsive mi_para_color text-center text-md-start fnt-poppins-regular"><?php echo get_field("form_heading"); ?></h3>
        <div class="spacer-33"></div>

        <!-- <form action=""> -->
          <div class="row px-0 mobileviewoform_mi" id="distributor_en">
            <?php echo do_shortcode('[contact-form-7 id="314adda" title="Application Form" html_class="form-row"]'); ?>
          </div>
        <!-- </form> -->

      </div>
      <div class="spacer-54"></div>
    </div>
  </section>

</div>


<?php get_footer(); ?>