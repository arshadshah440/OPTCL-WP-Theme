<?php if (pll_current_language() == 'en') { ?>

<div class="footer-top">
  
  <div class="container">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <center>
        <a class="" href="index.php">
          <?php the_custom_logo(); ?>
      </a>
        </center>
      </div>
      <div class="col-md-4"></div>
    </div>

    <div class="spacer-40"></div>

    <div class="row mi_max_952 mx-auto">

      <!-- <div class="col"></div> -->

      <div class="col text-center text-md-start">
        <h5 class="fnt-white"><?php echo get_field("heading_1_text", 'option'); ?></h5>
        <div class="spacer-10"></div>

        <ul class="footer-list"id="footer-fnt-size">
                  <?php
                    $services = get_field('heading_1', 'option');
                    foreach ($services as $value) {
                    ?>

          <li><a href="<?php echo $value['sub_heading_1_url']; ?>"><?php echo $value['sub_heading_1']; ?></a></li>
          <?php
              }
           ?>
        </ul>
        
      </div>

      <div class="col text-center text-md-start">
        <h5 class="fnt-white"><?php echo get_field("heading_2_text", 'option'); ?></h5>
        <div class="spacer-10"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_2', 'option');
                    foreach ($services as $value) {
                    ?>
          <li><a href="<?php echo $value['sub_heading_2_url']; ?>"><?php echo $value['sub_heading_2']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col text-center text-md-start">
        <h5 class="fnt-white"><?php echo get_field("heading_3_text", 'option'); ?></h5>
        <div class="spacer-10"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_3', 'option');
                    foreach ($services as $value) {
                    ?>
          <li><a href="<?php echo $value['sub_heading_3_url']; ?>"><?php echo $value['sub_heading_3']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col text-center text-md-start">
        <h5 class="fnt-white"><?php echo get_field("heading_4_text", 'option'); ?></h5>
        <div class="spacer-10"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_4', 'option');
                    foreach ($services as $value) {
                    ?>
          <li><a href="<?php echo $value['sub_heading_4_url']; ?>"><?php echo $value['sub_heading_4']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col text-center text-md-start">
        <h5 class="fnt-white"><?php echo get_field("heading_5_text", 'option'); ?></h5>
        <div class="spacer-10"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_5', 'option');
                    foreach ($services as $value) {
                    ?>
          <li><a href="<?php echo $value['sub_heading_5_url']; ?>"><?php echo $value['sub_heading_5']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>                                      
      
      <!-- <div class="col"></div> -->
    </div>
  </div>
  
</div>

<div class="spacer-20"></div>

<div class="footer-bottom">

  <center>
    <div class="footer-social">
      <a href="<?php echo get_field("linkedin_link", 'option'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="<?php echo get_field("instagram_link", 'option'); ?>"><i class="fa-brands fa-instagram"></i></a>
      <a href="<?php echo get_field("twitter_link", 'option'); ?>"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="<?php echo get_field("facebook_link", 'option'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
    </div>    
  </center>

  
</div>

<div class="spacer-20"></div>

<div class="copyright">
  <center>
    <p class="fnt-white fw-bold"><?php echo get_field("copy_right_text", 'option') . ' ' . date("Y"); ?></p>
  </center>
</div>

<?php }else { ?>
<!-- ********** Arabic Footer ********* -->
<style>
  ul{
    margin:0;
  }
</style>
<div class="footer-top mi-footer-list-main">
  
  <div class="container">

    <div class="row">
      <div class="col-md-12 d-flex align-items-center justify-content-center">
        <center>
        <a class="" href="index.php">
          <?php the_custom_logo(); ?>
      </a>
        </center>
      </div>
    </div>

    <div class="spacer-45"></div>

    <div class="row pd-rt-60"id="col-gap-ar">

      

      <div class="col" id="text-aling-ar">
        <h5 class="fnt-white fnt-20 mi-leading-26 fw-bold fnt-GE-SS-Two" id="footer-mob-ar"><?php echo get_field("heading_1_text_ar", 'option'); ?></h5>
        <div class="spacer-6"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_1_ar', 'option');
                    foreach ($services as $value) {
                    ?>

          <li class="mi-mb-14"><a class="fnt-20 mi-leading-26 fw-light fnt-GE-SS-Two-rg mi-footer-link-hover"id="footer-fnt-size" href="<?php echo $value['sub_heading_1_url']; ?>"><?php echo $value['sub_heading_1']; ?></a></li>
          <?php
              }
           ?>
        </ul>
        
      </div>

      <div class="col" id="text-aling-ar">
        <h5 class="fnt-white fnt-20 mi-leading-26 fw-bold fnt-GE-SS-Two" id="footer-mob-ar"><?php echo get_field("heading_2_text_ar", 'option'); ?></h5>
        <div class="spacer-6"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_2_ar', 'option');
                    foreach ($services as $value) {
                    ?>
          <li class="mi-mb-14"><a class="fnt-20 mi-leading-26 fw-light fnt-GE-SS-Two-rg mi-footer-link-hover "id="footer-fnt-size" href="<?php echo $value['sub_heading_2_url']; ?>"><?php echo $value['sub_heading_2']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col" id="text-aling-ar">
        <h5 class="fnt-white fnt-20 mi-leading-26 fw-bold fnt-GE-SS-Two" id="footer-mob-ar"><?php echo get_field("heading_3_text_ar", 'option'); ?></h5>
        <div class="spacer-6"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_3_ar', 'option');
                    foreach ($services as $value) {
                    ?>
          <li class="mi-mb-14"><a class="fnt-20 mi-leading-26 fw-light fnt-GE-SS-Two-rg mi-footer-link-hover "id="footer-fnt-size" href="<?php echo $value['sub_heading_3_url']; ?>"><?php echo $value['sub_heading_3']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col" id="text-aling-ar">
        <h5 class="fnt-white fnt-20 mi-leading-26 fw-bold fnt-GE-SS-Two" id="footer-mob-ar"><?php echo get_field("heading_4_text_ar", 'option'); ?></h5>
        <div class="spacer-6"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_4_ar', 'option');
                    foreach ($services as $value) {
                    ?>
          <li class="mi-mb-14"><a class="fnt-20 mi-leading-26 fw-light fnt-GE-SS-Two-rg mi-footer-link-hover "id="footer-fnt-size" href="<?php echo $value['sub_heading_4_url']; ?>"><?php echo $value['sub_heading_4']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>

      <div class="col"  id="text-aling-ar">
        <h5 class="fnt-white fnt-20 mi-leading-26 fw-bold fnt-GE-SS-Two" id="footer-mob-ar"><?php echo get_field("heading_5_text_ar", 'option'); ?></h5>
        <div class="spacer-6"></div>

        <ul class="footer-list">
                  <?php
                    $services = get_field('heading_5_ar', 'option');
                    foreach ($services as $value) {
                    ?>
          <li class="mi-mb-14"><a class="fnt-20 mi-leading-26 fw-light fnt-GE-SS-Two-rg mi-footer-link-hover "id="footer-fnt-size" href="<?php echo $value['sub_heading_5_url']; ?>"><?php echo $value['sub_heading_5']; ?></a></li>
          <?php
              }
           ?>
        </ul>
      </div>                                      
    </div>
  </div>
  
</div>

<div class="spacer-28"></div>

<div class="footer-bottom">

  <center>
    <div class="footer-social-ar mi-footer-social-ar">
    <a href="<?php echo get_field("facebook_link", 'option'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="<?php echo get_field("twitter_link", 'option'); ?>"><i class="fa-brands fa-x-twitter"></i></a>
    <a href="<?php echo get_field("instagram_link", 'option'); ?>"><i class="fa-brands fa-instagram"></i></a>
      <a href="<?php echo get_field("linkedin_link", 'option'); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
      
      
      
    </div>    
  </center>

  
</div>

<div class="spacer-33"></div>

<div class="copyright">
  <center>
    <p class="fnt-white fnt-15 fw-bold"id="footer-copyright"><?php echo get_field("copy_right_text_ar", 'option') . ' ' . date("Y"); ?></p>
  </center>
</div>
<?php } ?>