<?php /* Template Name: About Template */

get_header();

?>
<style>

</style>

  <!--header-->

  
  <div data-scroll-container >

  	<!--header-->
    <section class="flip hero_sec_en" data-scroll-section>
      

      <div class="container-fluid bg-white">
        <div class="spacer-70 d-none d-md-block"></div>
        <div class=" aboutHeader "></div>
        
          <div class="container tab-top-margin-100" id="about_en_hero_sect" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
            <div class="row align-items-center hero_container_en pd-top-40 pd-tp-about"id="hero-pd-en">
              
              <div class="col-md-6 text-center text-md-start px-0 ipad-text-align ipad-pd-left">

                <h3 class="fnt-blue d-flex align-items-center global-heading-blue justify-content-center justify-content-md-start im-rotate "id="about-en-fnt">
                  <img src="<?php echo get_field("heading_image");?>" class="img-fluid fa-mar-right-20" id="icon_mar_mb_mi"> 
                  <?php echo get_field("hero_heading");?></h3>
                <!-- <div class="spacer-20 d-md-none"></div> -->
                  <div class="global-content-blue mi_mt_23 mi_w_555 mi_text_justified mi_letterspace_1 text-center text-md-start"id="abt-fnt"><?php echo get_field("hero_description");?></div>
                <div class="spacer-10"></div>
				<div class="spacer-10"></div>


              </div>

              <div class="col-md-6 px-0">
 
                 
                   <video id="background-video" autoplay="" loop="" muted="" class="w-100 h-100 bordered-shadow hero_video_en ipad-margin-left-80 vid-about" >
                      <source src="<?php echo get_field("hero_video");?>" class="w-100 h-100" type="video/mp4">
                    </video>  


                <!-- <div class="spacer-20 d-md-none"></div> -->
              </div>


            </div>
          </div>

        <div class="missionTopSpacer"></div>
     
      </div>

    </section>

    <section class="non-parallax  posRel"  data-scroll-section>
    
    	<div class="container-fluid bg-light-blue blueSpacer">
    		<div class="spacer-60 d-md-none"id="spacer-en"></div>

    		<div class="container" id="mission_sect_mi" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="3">
	    		<div class="row">
	    			<div class="col-md-2"></div>

	    			<div class="col-md-8 text-center text-md-start ps-md-5" id="about_en_mission">

						<h3 class="fnt-white d-flex align-items-center global-heading-white justify-content-center justify-content-md-start" id="about-en-fnt">
						<img src="<?php echo get_field("mission_heading_image");?>" class="img-fluid fa-mar-right-20" id="icon_mar_mb_mi"> 
						<?php echo get_field("mission_section_heading");?>
						</h3>
						<div class="spacer-20"></div>

						<div class="global-content-white mission_des_en mi_text_justified mi_w_690 mi_fnt_line_31 text-center text-md-start ipad-text-align"id="abt-fnt"><?php echo get_field("mission_description_");?></div>
						<div class="spacer-0 d-none d-md-block"></div>
						<div class="d-block d-md-none" data-scroll data-scroll-direction="" data-scroll-speed=""id="img-hide">
						<img src="<?php echo get_field("right_image");?>" class="img-fluid missionImg mi_mobileview_rotation" >
						</div>
	    			</div>

	    			<div class="col-md-2"></div>
	    		</div>
    		</div>

        	<div class="aboutus-float-right d-none d-md-block tab-w-180" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
              <img src="<?php echo get_field("right_image");?>" class="img-fluid"  >
            </div>

    		<!-- <div class="spacer-120 d-none d-lg-block"></div> -->
    	</div>
    	
    </section>

    <section class="non-parallax  mirelative"  data-scroll-section>
    	
    	<div class="container-fluid bg-light-white versionSpacer">
    		<div class="spacer-60 d-md-none"id="spacer-en"></div>

    		<div class="container" id="vission_sect_mi" data-scroll data-scroll-repeat data-scroll-direction="horizontal" data-scroll-speed="-3">
	    		<div class="row">
	    			<div class="col-md-3"></div>

	    			<div class="col-md-6 text-center ipad-text-align" id="about_en_vission_sect">

						<h3 class="fnt-blue d-flex align-items-center global-heading-blue justify-content-center justify-content-md-start im-rotate" id="about-en-fnt" >
		                  <img src="<?php echo get_field("heading_image");?>" class="img-fluid fa-mar-right-20" id="icon_mar_mb_mi"> 
		                  <?php echo get_field("vision_heading");?>
		                </h3>
		                <div class="spacer-20"></div>

		                <div class="global-content-blue versionText text-sm-start" id="abt-fnt"><?php echo get_field("vision_description");?></div>
		                <div class="spacer-20 d-none d-md-block"></div>
	    				<div class="d-block d-md-none" data-scroll data-scroll-direction="" data-scroll-speed=""id="div-hide">
						<img src="<?php echo get_field("left_image");?>" class="img-fluid versionImg" style=" width:100%; height: 450px; min-width:450px; transform:rotate(90deg)">
						</div>
	    			</div>

	    			<div class="col-md-3"></div>

	    		</div>
    		</div>

        	<div class="aboutus-float-left d-none d-md-block tab-w-180" data-scroll data-scroll-direction="vertical" data-scroll-speed="3">
              <img src="<?php echo get_field("left_image");?>" class="img-fluid" >
            </div>

    		<!-- <div class="spacer-120 d-md-none"></div> -->
    	</div>

    </section>    


    <?php ?>

  </div>  
  <?php get_footer();?>

