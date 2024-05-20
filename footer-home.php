 
   <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OPTCL
 */

?>
 <!--footer-->
  <footer id="footer" class="parallax posRel" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)),url('<?php echo get_template_directory_uri();?>/img/home-footer-bg.jpg');" data-scroll-section> 
  <div class="spacer-120"></div>

    <?php include(PATHLOCAL.'/template-parts/contactus-form.php');?>
    <div class="spacer-120"></div>

    <?php include(PATHLOCAL.'/template-parts/footer-list.php');?>

    <div class="spacer-40"></div>
  </footer>




<!--scripts-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<srript ser="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></srript>
<!--<script>
  var bootstrapButton = jQuery.fn.button.noConflict();
  jQuery.fn.bootstrapBtn = bootstrapButton;
</script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/locomotive-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9906f7c527.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>

<!--
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodulesrc="https://polyfill.io/v3/polyfill.min.js?features=Element.prototype.remove%2CElement.prototype.append%2Cfetch%2CCustomEvent%2CElement.prototype.matches%2CNodeList.prototype.forEach%2CAbortController"crossorigin="anonymous"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.1.0/jquery.countTo.min.js" integrity="sha512-ZbM86dAmjIe3nPA2k8j3G//NO/zBYNnZ8wi+yUKh8VH24CHr0aDhDHoEM4IvGl+Sz6ga7ONnGBDxS+BTVJ+K2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php wp_footer(); ?>
</div><!-- #page -->
 </body>
</html>