<?php /* Template Name: About Template Arabic */

get_header();

?>
<style>

</style>
<div data-scroll-container class="flipped">

<!--header-->
<section class=" hero_sec_ar" data-scroll-section>


<div class="container-fluid" id="about_hero_sect_mi">
  <div class="spacer-100 d-none d-md-block"></div>
  <div class="spacer-80"id="spacer-v-section"></div>
  
    <div class="container px-0 tab-top-margin-100" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
      <div class="row align-items-center px-0 justify-content-between pd-top-40">
        
        <div class="col-md-6 text-center text-md-end heroText mi-about-text-main">

          <h3 class="fnt-blue d-flex align-items-center heading_ar global-heading-white justify-content-center justify-content-md-start fnt-30 mi-leading-26 fw-bold fnt-GE-SS-Two hero-hd-align space-pd-about"id="about-head-ar">
            <img src="<?php echo get_field("heading_image_ar");?>" class="img-fluid fa-mar-left-20 hd_img_ar" id="icon_mar_mb_mi"> 
            <?php echo get_field("hero_heading_ar");?>
          </h3>
          <div class="about-hero-descr ipad-pd-left-50"id="about-fnt-ar"><p class="fnt-blue global-content-blue-ar "><?php echo get_field("hero_description_ar");?></p></div>
          <div class="spacer-0 d-md-none"></div>
          <div class="spacer-10"id="spacer-v-section"></div>


        </div>


        <div class="col-md-6 mi-about-ar-video-col"id="vid-space">

           
             <video id="background-video" autoplay="" loop="" muted="" class="w-100 bordered-shadow flipped hero_video_ar vid-about">
                <source src="<?php echo get_field("hero_video_ar");?>" type="video/mp4">
              </video>  


          <div class="spacer-40 d-md-none"></div>
          <div class="spacer-20 d-md-none"></div>
        </div>


      </div>
    </div>

  <div class="missionTopSpacer"></div>
</div>

</section>

<section class="non-parallax  posRel"  data-scroll-section>

  <div class="container-fluid bg-blue blueSpacer" id="about_second_sect">
      <div class="spacer-60 d-md-none"></div>

      <div class="container px-0" id="mission_sect_mi" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="3">
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6 px-0 text_des_size text-center text-md-end aboutText mi-aboutText-ar "id="pd-section-1">
                <h3 class="fnt-white d-flex align-items-center global-heading-white-ar justify-content-center justify-content-md-start fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold"id="about-head-ar">
                  <img src="<?php echo get_field("heading_image_ar");?>" class="img-fluid fa-mar-left-20 hd_img_ar" id="icon_mar_mb_mi"> 
                  <?php echo get_field("mission_section_heading_ar");?>
                </h3>
                  <div class="spacer-10"id="spacer-v-section"></div>
                <div class="about-mission-descr"id="about-fnt-ar">
                <p class="fnt-white global-content-white-ar fnt-GE-SS-Two fnt-25 mi-leading-31"><?php echo get_field("mission_description__ar");?></p></div>
                <div class="spacer-20 d-none d-md-block"></div>
                <div class="d-block d-md-none" data-scroll data-scroll-direction="" data-scroll-speed="" id="img-hide_ar">
						    <img src="<?php echo get_field("left_image_ar");?>" class="img-fluid missionImg" style=" width:100%; height: 450px; min-width:450px; transform:rotate(90deg)">
						  </div>     
              </div>
              <div class="col-md-3"></div>
          </div>
      </div>

      <div class="aboutus-float-right d-none d-md-block tab-w-180" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
        <img src="<?php echo get_field("left_image_ar");?>" class="img-fluid flip-img" >
      </div>

      <!-- <div class="spacer-120 d-none d-md-block"></div> -->
  </div>
  
</section>

<section class="non-parallax mi-main-about-3 about-duv-height"  data-scroll-section>
  
  <div class="container-fluid bg-light-white versionSpacer mi-about-container-3" id="about_third_sect">
      <div class="spacer-60 d-md-none"></div>

      <div class="container" id="vission_sect_mi" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="-3">
          <div class="row">
              <div class="col-md-2"></div>

              <div class="col-md-6 text-center text-md-end aboutText mi-aboutText-ar2 section-pd"id="abt-fnt-ar">

                  <h3 class="fnt-blue d-flex align-items-center global-heading-white justify-content-center justify-content-md-start fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold"id="about-head-ar">
                    <img src="<?php echo get_field("heading_image_ar");?>" class="img-fluid fa-mar-left-20 hd_img_ar" id="icon_mar_mb_mi"> 
                    <?php echo get_field("vision_heading_ar");?> 
                  </h3>
                  <div class="spacer-10"id="spacer-v-section"></div>

                  <p class="fnt-blue global-content-blue-ar "id="abt-fnt-ar"><?php echo get_field("vision_description_ar");?></p>
                  <div class="spacer-20 d-none d-md-block"></div>
                  <div class="d-block d-md-none" data-scroll data-scroll-direction="" data-scroll-speed=""id="div-abt-hide">
						<img src="<?php echo get_field("right_image_ar");?>" class="img-fluid versionImg" style=" width:100%; height: 450px; min-width:450px; transform:rotate(90deg)">
						</div>
              </div>

              <div class="col-md-4"></div>

          </div>
      </div>

      <div class="aboutus-float-left d-none d-md-block tab-w-180" data-scroll data-scroll-direction="vertical" data-scroll-speed="3">
        <img src="<?php echo get_field("right_image_ar");?>" class="img-fluid flip-img" >
      </div>

      <!-- <div class="spacer-120 d-md-none"></div> -->
  </div>

</section>    


<?php ?>

</div>
  <?php get_footer();?>
