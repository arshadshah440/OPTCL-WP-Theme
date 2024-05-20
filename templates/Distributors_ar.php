<?php /* Template Name: Distributors Template Arabic */

get_header();

?>

<div data-scroll-container>
<section class="non-vh flipped" data-scroll-section>
  
  <div class="container-fluid " id="distributor_ar_hero_sect">
    <div class="spacer-120 d-none d-md-block"></div>
    <div class="spacer-60"></div>
    <div class="spacer-20"id="top-spacer-ar"></div>

    <div class="container container-responsive px-0">
      <h3 class="fnt-blue d-flex align-items-center h3-responsive-ar fw-bold" id="mi_fnt_size_30">
        <img src="<?php echo get_field("heading_icon_ar");?>" class="img-fluid fa-mar-left-20"> 
        <?php echo get_field("heading_text_ar");?>
      </h3>
      <!-- <div class="spacer-20 spacer-hide-"></div> -->
      <div class="spacer-35"id="spacer-dist-ar"></div>
      <div class="hd-desc-destributor"id="fm-fnt">
      <p class="fnt-25"><?php echo get_field("description_ar");?></p></div>
      <div class="spacer-35"></div>
    <div id="img-mb-ar">
      <img src="<?php echo get_field("featured_image_ar");?>" class="img-fluid w-100 br-rad-shadowed br-rad-shadowed-responsive">
      </div>
    </div>

  </div>

</section>

<section class="distributor-responsive app-form-section flipped" data-scroll-section>
  
  <div class="container-fluid  px-0" id="distributor_ar_form_sect">
    <div class="spacer-40"></div>

    <div class="container px-0">
    <div class="spacer-20"></div>
       <h3 class="destributor-hd-ar"><?php echo get_field("form_heading_ar");?></h3>
       <div class="spacer-40"></div>

         <div class="row dis-ar-form-wraper" id="distributor_ar">

         <?php echo do_shortcode('[contact-form-7 id="10d4055" title="Application Form_AR"]'); ?>

           <!-- <div class="col-md-4">
             <input type="text" name="fullname" class="form-control cu-control" placeholder="Name" required>
             <div class="spacer-20"></div>
           </div>

            <div class="col-md-4">
             <input type="tel" name="phone" class="form-control cu-control" placeholder="Phone Number" required>
             <div class="spacer-20"></div>
           </div>

            <div class="col-md-4">
             <input type="email" name="email" class="form-control cu-control" placeholder="Email" required>
             <div class="spacer-20"></div>
           </div>

            <div class="col-md-6">
             <input type="text" name="add1" class="form-control cu-control" placeholder="Address 1" required>
             <div class="spacer-20"></div>
           </div> 

            <div class="col-md-6">
             <input type="text" name="add12" class="form-control cu-control" placeholder="Address 2">
             <div class="spacer-20"></div>
           </div>  

           <div class="col-md-4">
             <input type="text" name="city" class="form-control cu-control" placeholder="City" required>
             <div class="spacer-20"></div>
           </div>  

           <div class="col-md-4">
             <input type="text" name="gov" class="form-control cu-control" placeholder="Governorate" required>
             <div class="spacer-20"></div>
           </div> 

           <div class="col-md-4">
             <input type="text" name="postal" class="form-control cu-control" placeholder="Postal Code" required>
             <div class="spacer-20"></div>
           </div>

            <div class="col-md-3">
             <button class="btn btn-warning btn-yellow w-100">Send <i class="fa-solid fa-location-arrow"></i></button>
           </div> -->


         </div>

    </div> 
    <div class="spacer-54"></div>
  </div> 
</section>

</div>


<?php get_footer(); ?>