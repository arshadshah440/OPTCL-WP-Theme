<?php /* Template Name: Single Products */

get_header();
?>
<style>


</style>
<?php
if (!isset($_GET['id']) || $_GET['id'] == "") {

    wp_redirect(home_url());

    exit;
}

$currentpost = $_GET['id'];
?>


<!--header-->


<div data-scroll-container>


    <section class="non-vh flipped" data-scroll-section>
        <?php
        // echo sizeof($current_chunk);
        ?>
        <?php
        // echo $current_page; 
        ?>
        <div class="container-fluid bg-white" id="sngle_pg_container">
            <div class="spacer-120 spacer-mobile-60"></div>
            <!-- <div class="spacer-40 mobile-remove-space"></div> -->
            <div class="container px-0" id="singl_pg_heading">
                <div class="row">
                    <div class="col-9">
                        <h3 class="fnt-blue d-flex align-items-center justify-content-center justify-content-md-start global-heading-blue-ar fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold">
                            <img src="<?php echo get_field("heading_icon"); ?>" class="img-fluid fa-mar-right-20">
                            <?php echo get_field("heading_text"); ?>
                        </h3>
                    </div>
                    <div class="col-3 text-end">
                        <a href="<?php echo get_field("back_url"); ?>" class="btn btn-warning btn-yellow mi-btn-yellow fnt-GE-SS-Two fw-bold mi-fnt-18 mbl-w-100" id="mobile_font_10">Back</a>
                        <!-- <button class='bg_yellow_btn'>العودة</button> -->
                    </div>
                </div>
                <div class="spacer-54"></div>

                <div class="product-filter" id="single_pg_pr">
                    <div class="row justify-content-between">
                        <?php if (have_rows('category_names')) :
                            while (have_rows('category_names')) : the_row();  ?>

                                <div class="col">
                                    <center>
                                        <a href="<?php echo get_sub_field('category_url'); ?>" class="single_product_page d-flex align-items-center justify-content-center mobile-margin-bottom-20  fnt-light-blue fnt-GE-SS-Two fnt-25 mi-leading-26 fw-bold global-pr-heading-ar">

                                            <img src="<?php echo get_sub_field('name_icon'); ?>" class="img-fluid fa-mar-right-20"> <?php echo get_sub_field('name'); ?>

                                        </a>
                                    </center>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </div>




            </div>
            <div class="spacer-40"></div>
        </div>

    </section>
    <section  data-scroll-section>
        <div class="container" id="pdf_div_wrapper">
            <div class="row">
                <?php include_once(get_template_directory() . '/inc/product-loop.php'); ?>
            </div>
        </div>
    </section>
</div>

<?php

get_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('#productdownload_pdf').click(function(e) {
            e.preventDefault();

            const scroller = new LocomotiveScroll({
                el: document.querySelector("[data-scroll-container]"),
                smooth: true,
            });
            scroller.scrollTo(0);


            // Get the full height and width of the body content
            var height = document.getElementById("pdf_div_wrapper").scrollHeight;
            var width = document.getElementById("pdf_div_wrapper").scrollWidth;

            // Apply necessary style changes
            const elements = document.querySelectorAll('*');
            for (const element of elements) {
                element.style.boxShadow = 'none';
                // Force weak ligatures off
                element.style.fontFeatureSettings = '"liga" 0';
            }
            $("#productdownload_pdf").hide();
            // Make sure LocomotiveScroll is updated and elements are laid out correctly
            scroller.update();

            // Capture the content with html2pdf
            var element = document.getElementById("pdf_div_wrapper");

            // Configuring the html2pdf options
            const opts = {
                html2canvas: {
                    useCORS: true,
                }
            }
            // Generate the PDF
            html2pdf().from(element).set(opts).save().then(() => {
                // Restore hidden elements
                $("#productdownload_pdf").show();
            });
        });
    });
</script>