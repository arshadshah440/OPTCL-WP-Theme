<?php
/* Template Name: HomePage Arabic */
get_header();
?>


<div data-scroll-container>

    <!--home banner-->
    <section id="homebanner" class="non-parallax" style="background-image: url('<?php print site_url();?>/wp-content/uploads/2024/01/home-banner1.jpg');" data-scroll-section>

        <div class="container-fluid px-0">
            <div class="spacer_120_mi spacer-mobile-60"></div>
            <div class="spacer-75 d-none d-md-block"></div>
            <div class="container px-0 tab-margin-50 max_width_80">

                <div class="row mx-0">

                    <!--home banner left-->
                    <div class="col-md-6 px-0">

                        <div class="row px-0 mx-0">
                            <div class="col-md-12 col-10 px-0">

                                <h3 class="fnt-40 fnt-blue fnt-GE-SS-Two-rg mi-leading-100 remMar  mobile_font_15"><?php echo get_field('home_hero_sub_heading_ar'); ?></h3>
                                <h1 class="fnt-80 fnt-GE-SS-Two mi-leading-100  mobile_font_31 fw-bold nomarginbb"><?php echo get_field('home_hero_heading_ar'); ?></h1>

                                <div class="spacer-20"></div>

                                <div class="row align-center mx-0">
                                    <div class="col-md-3 col-4 p-0 tab-mini-w-38">

                                        <img src="<?php echo get_field("home_hero_logo_ar"); ?>" class="img-fluid  mi-mar--12 ">
                                        <div class="spacer-60 d-none d-md-block"></div>
                                        <div class="spacer-20 d-md-none d-block"></div>
                                        <a href="<?php echo get_field("home_hero_button_link_ar"); ?>" class="yellow_btn_small_mi btn-yellow mi-btn-yellow fnt-GE-SS-Two fw-bold mi_font_bold_ar mi-fnt-18" id="mobile_font_10"><?php echo get_field("home_hero_button_text_ar"); ?></a>

                                    </div>
                                    <div class="col-md-7 col-8 p-0 tab-w-75" id="home_ar_date">

                                        <div>
                                            <h2 class="fnt-brown fnt-poppins-block fnt-70 mobile_font_31 remMar fnt-is-brown desktop_text_center"><b><?php echo get_field("home_hero_year_ar"); ?></b></h2>
                                            <h3 class="fnt-blue fnt-GE-SS-Two-rg mi-leading-61 fnt-40 mobile_font_18 mi-mar-top--35"><?php echo get_field("home_hero_year_text_ar"); ?></h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-2 d-block d-md-none px-0">

                                <div class="home-banner-social column gap-2 justify-content-center home-banner-social-responsive">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>

                            </div>
                        </div>

                        <div class="spacer-80"></div>
                    </div>

                    <!--home banner right-->
                    <div class="col-md-6 px-0">

                        <div class="row mx-0">
                            <div class="col-md-3 hiddin-tab-mini"></div>
                            <div class="col-3 d-block d-md-none p-0">
                                <div id="teardropThumbsmobile" class="row carousel-indicators mobile-row teardropThumbsmobile mx-0 ">
                                    <?php $images = get_field('home_hero_slider_ar');
                                    foreach ($images as $index => $value) {
                                    ?>
                                        <div class="col" style="padding: 0px 2px"><img src="<?php echo  $value['slide_image']; ?>" class="img-fluid img-partners mx-0" data-bs-target="#teardropProducts" data-bs-slide-to="<?php echo  $index; ?>" class="active" current-index='<?php echo $index; ?>'></div>
                                    <?php } ?>

                                </div>
                                <div class="slick_carousel_nav">
                                    <div class="slick-next-btn">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/slickdown.svg" class="img-fluid w-40">
                                    </div>
                                    <div class="slick-prev-btn  d-none">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/slickdown.svg" class="img-fluid w-40">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-9 tab-w-75 px-0">
                                <div class="teardropbox">
                                    <img id="bg-teardrop" src="<?php echo site_url('wp-content/uploads/2024/01/teardrop.svg'); ?>" class="img-fluid w-100 pb-red mi-flip-horizontal">

                                    <div id="teardropSLide">

                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8 tab-mini-margin">

                                                <div id="teardropProducts" class="carousel slide carousel-fade" data-bs-ride="carousel">

                                                    <div class="carousel-inner">
                                                        <?php $images = get_field('home_hero_slider_ar');
                                                        foreach ($images as $index => $value) {
                                                            if ($index == 0) {
                                                        ?>

                                                                <div class="carousel-item active" data-border="<?php echo $value['slider_border_color']; ?>"><img src="<?php echo $value['slide_image']; ?>" class="d-block img-fluid  teardrop-img" current-index='<?php echo $index; ?>'></div>
                                                            <?php } else {
                                                            ?>
                                                                <div class="carousel-item" data-border="<?php echo $value['slider_border_color']; ?>"><img src="<?php echo $value['slide_image']; ?>" class="d-block img-fluid  teardrop-img" current-index='<?php echo $index; ?>'></div>
                                                        <?php }
                                                        } ?>
                                                    </div>

                                                    <button class="carousel-control-prev hideThis" type="button" data-bs-target="#teardropProducts" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next hideThis" type="button" data-bs-target="#teardropProducts" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2 px-0 d-none d-md-block">
                                <div class="home-banner-social home-banner-social-ar column gap-2 justify-content-center home-banner-social-ar-responsive">
                                    <a href="#"><i class="fa-brands fa-linkedin-in mbl-top-4"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram mbl-top-4"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter mbl-top-4"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f mbl-top-4"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-45"></div>

                    </div>
                </div>

                <div class="spacer-20"></div>

                <div id="teardropThumbs" class="row carousel-indicators mobile-row gap-1 owl-carousel d-none d-md-block">
                    <?php $images = get_field('home_hero_slider_ar');
                    foreach ($images as $index => $value) {

                    ?>
                        <div class="col px-1 mx-1"><img src="<?php echo  $value['slide_image']; ?>" class="img-fluid img-partners mi-circle-partners" data-bs-target="#teardropProducts" data-bs-slide-to="<?php echo  $index; ?>" class="active"></div>
                    <?php } ?>
                </div>



            </div>

            <div class="spacer-80 d-none d-md-block"></div>
        </div>

    </section>

    <!--about us-->
    <section id="aboutus" class="" style=" min-height: 50vh;" data-scroll-section>


        <div class="container-fluid bg_change_color_mi">
            <div class="spacer-70 spacer-mobile-60"></div>
            <div class="container max_width_80 px-0" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
                <div class="row align-items-center mx-0">

                    <div class="col-md-5 px-0">

                        <h3 class="fnt-white d-flex align-items-center global-heading-white-ar justify-content-center justify-content-md-start fnt-GE-SS-Two fw-bold mi-fnt-30 mobile_font_24" id="header-home-mi">
                            <img src="<?php echo get_field("about_section_icon_ar"); ?>" class="img-fluid fa-mar-left-20">
                            <?php echo get_field("about__section_heading_ar"); ?>
                        </h3>
                        <div class="spacer-20"></div>

                        <p class="fnt-white mobile_text_justified global-pct-white-ar fnt-GE-SS-Two-rg mi-fnt-20 mobile_font_18 leading-30" id="mob-home-fnt"><?php echo get_field("about_section_description_ar"); ?></p>

                        <div class="row">
                            <div class="col-md-4 padding-15">
                                <a href="<?php echo get_field("about_button_link_ar"); ?>" class="yellow_btn_small_mi btn-yellow mi-btn-yellow fnt-GE-SS-Two  mi_font_bold_ar "><?php echo get_field("about_button_text_ar"); ?></a>
                            </div>
                            <div class="col-md-8"></div>
                        </div>
                        <div class="spacer-26"></div>

                        <div class="row">

                            <div class="col-md-12 col-6 home-col-ar" id="hover_comp_ar">
                                <a href="<?php echo get_field("about_company_cataloge_link_ar"); ?>" target="_blank" class="fnt-white mi_font_12 font_weight_500_mi align-items-center fnt-20 mi_font_regular_ar  mi-about-icons-hover justify-content-center justify-content-md-start">
                                    <i class="fa-solid fa-book fnt-yellow mi-ml-10"></i>
                                    <?php echo get_field("about_company_cataloge_text_ar"); ?>
                                </a>
                                <a href="<?php echo get_field("company_file_link_ar"); ?>" target="_blank" class="d-none d-md-inline font_weight_500_mi  mx-4 fnt-white align-items-center mi_font_12 fnt-20 mi_font_regular_ar mi-about-icons-hover justify-content-center justify-content-md-start">
                                    <i class="fa-solid fa-file fnt-yellow mi-ml-10 mi-icon-docs"></i>
                                    <?php echo get_field("company_file_text_ar"); ?>
                                </a>
                                <div class="spacer-20"></div>
                            </div>

                            <div class="col-md-6  col-6 px-1 tab-mini-w-230 d-flex d-md-none" id="hover_comp_ar">

                                <a href="<?php echo get_field("company_file_link_ar"); ?>" target="_blank" class="fnt-white align-items-center font_weight_500_mi mi_font_12 fnt-20 mi_font_regular_ar  mi-about-icons-hover justify-content-center justify-content-md-start">
                                    <i class="fa-solid fa-file fnt-yellow mi-ml-10 mi-icon-docs"></i>
                                    <?php echo get_field("company_file_text_ar"); ?>
                                </a>
                                <div class="spacer-20"></div>
                            </div>
                        </div>


                        <div class="spacer-20"></div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-6 px-0">


                        <video id="background-video" autoplay="" loop="" muted="" class="w-650 bordered-shadow">
                            <source src=" <?php echo get_field("about_section_video_ar"); ?>" type="video/mp4">
                        </video>


                        <div class="spacer-20"></div>
                    </div>


                </div>
            </div>

            <div class="spacer_120_mi"></div>
            <div class="spacer_170_mi d-block d-md-none"></div>

            <!--floating details-->

            <div id="floating-details" class="container-fluid max_width_80 floating_dtails_mi" data-scroll data-scroll-direction="vertical" data-scroll-speed="3" data-scroll-call="triggerCounter">
                <div class="container bordered-shadow -mt-150 mi-floating-row">

                    <div class="row">
                        <div class="col-md-2"></div>

                        <?php if (have_rows('company_stats_list_ar')) {

                            while (have_rows('company_stats_list_ar')) {
                                the_row();
                                $icon_img = get_sub_field('icon_image');
                                $icon = get_sub_field('company_stats_list_icon');
                                $heading = get_sub_field('company_stats_list_heading');
                                $numbers = get_sub_field('company_stats_list_numbers');
                        ?>
                                <div class="col-3 col-md-2">
                                    <div class="spacer-40"></div>
                                    <center>
                                        <!-- <i class="fd-icon fa-solid fa-<?php echo $icon; ?> fnt-brown"></i> -->
                                        <p> <img src="<?php echo $icon_img; ?>" alt=""></p>
                                        <p class="fd-count fnt-blue  counter fnt-GE-SS-Two-rg mi_font_12 mi_y_axis_margin_2" data-from="0" data-to="<?php echo $numbers; ?>" data-speed="5000" data-refresh-interval="25"></p>
                                        <p class="fd-type fnt-blue desktop_font_23 font_weight_500_mi remMar fnt-GE-SS-Two-rg mi_font_12"><?php echo $heading; ?></p>
                                    </center>
                                    <div class="spacer-40"></div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <div class="col-md-2"></div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!--products-->
    <section id="products products-relative" class="parallax parallax-products mi_z_index_10_mi" data-scroll-section>
        <div class="spacer_120_mi"></div>

        <div class="container ipad-pd-40" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
            <div class="row mrgn-rt max_width_80">
                <div class="col-md-6 ipad-w-100">

                    <div class="spacer_120_mi"></div>
                    <h3 class="d-flex flex-md-row align-items-center desktop_font_30 fnt-GE-SS-Two mi-leading-31 fw-bold global-heading-blue-ar mrgn-rt--10 mobile_font_24">
                        <img src="<?php echo get_field('department_product_section_icons_ar') ?>" class="img-fluid fa-mar-left-20">
                        <?php echo get_field('department_product_section_heading_ar') ?>
                    </h3>
                    <div class="spacer-148"></div>
                    <div class="wrapper_carousel">
                        <div class="row justify-content-center  d-none d-md-flex">

                            <?php if (have_rows('departments', 'option')) {
                                while (have_rows('departments', 'option')) {
                                    the_row();
                                    $depiconurl = get_sub_field('department_icon');
                                    $depname = get_sub_field('department_name_ar');
                                    $depurl = get_sub_field('department_details_ar_page_url');
                            ?>
                                    <div class="col-md-6">
                                        <a href="<?php echo $depurl; ?>">
                                            <center>
                                                <img src="<?php echo $depiconurl; ?>" class="img-fluid prod-img">
                                                <div class="spacer-10"></div>
                                                <p class="fnt-blue fnt-25 mobiles_fonts_18"><b class="global-pr-heading-ar fnt-GE-SS-Two mi-leading-31 fnt-25 fw-bold mobiles_fonts_18"><?php echo $depname; ?></b></p>
                                            </center>
                                        </a>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="owl-carousel d-block d-md-none" id="product_dep_carousel">
                            <?php if (have_rows('departments', 'option')) {
                                while (have_rows('departments', 'option')) {
                                    the_row();
                                    $depiconurl = get_sub_field('department_icon');
                                    $depname = get_sub_field('department_name_ar');
                                    $depurl = get_sub_field('department_details_page_url_');
                            ?>
                                    <div class="item">
                                        <a href="<?php echo $depurl; ?>
                                     ">
                                            <center>
                                                <img src="<?php echo $depiconurl; ?>" class="img-fluid prod-img">
                                                <div class="spacer-15"></div>
                                                <p class="fnt-blue fnt-25 mobiles_fonts_18"><b class="global-pr-heading text-color-blue8 mobiles_fonts_18"><?php echo $depname; ?></b></p>
                                            </center>
                                        </a>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="btn-wrap  d-block d-md-none">
                            <button class="prev-btn-ptk prev_btn_mi"><img src="<?php echo  get_template_directory_uri() ?>/img/pubprev.svg" alt=""></button>
                            <button class="next-btn-ptk next_btn_mi"><img src="<?php echo  get_template_directory_uri() ?>/img/pubnext.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mobile-hidden position-relative">

                    <div class="prod-float-ar mi-prod-float-ar mi-prod-float-ar-home z_index_mi_999" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
                        <img src="<?php echo get_field('department_product_section_image_ar') ?>" class="img-fluid mbl-hidden">
                    </div>


                </div>
            </div>

        </div>
        <!-- <img src="<?php echo get_field('department_product_section_image_ar') ?>" class="products-bg-img mbl-hidden"> -->
        <div class="spacers_120_mi spacer-mobile-53"></div>

    </section>

    <!--services-->
    <section id="services" class="non-parallax service-parallax mi_z_index_0_mi" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url('<?php echo get_field('service_section_background_image_ar'); ?>');" data-scroll-section>
        <div class="spacer-120 spacer-mobile-60"></div>

        <div class="container px-0 max_width_80" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">
            <h3 class="fnt-white d-flex align-items-center  justify-content-md-start global-heading-white-ar fnt-GE-SS-Two mi-leading-31 fw-bold desktop_font_30 mobile_font_24">
                <img src="<?php echo get_field('service_section_heading_icons_ar'); ?>" class="img-fluid fa-mar-left-20">
                <?php echo get_field('service_section_heading_ar'); ?>
            </h3>
            <div class="spacer-20"></div>

            <div class="row px-0 mx-0">
                <div class="col-md-3 tab-mini-w-10"></div>
                <div class="col-md-6 tab-mini-w-78 ipad-w-100">
                    <div class="spacer-40"></div>

                    <div class="services-gallery">

                        <?php
                        $services = get_field('optcl_services_ar', 'option');
                        // var_dump($services);
                        foreach ($services as $index => $value) {
                        ?>
                            <div class="service-items services-header services-header-home ser-card-ar <?php echo ($index == 0) ? 'active' : ''; ?>" id="serv-<?php echo $index; ?>">

                                <div class="mi_top_image">
                                    <img src="<?php echo  get_template_directory_uri(); ?>/img/services-plate.svg" alt="">
                                </div>
                                <div class="bottom">
                                    <h4 class="fnt-GE-SS-Two mi-leading-31 desktop_font_25  mobile_font_24 fw-bold global-pr-heading-ar"><?php echo  $value['service_title']; ?></h4>
                                    <div class="mobile-text-justify fnt-GE-SS-Two-rg mi-leading-31 desktop_font_20 mi-ser-blue servicedescmi global-content-blue-ar mobile_font_16"><?php echo  $value['service_descritption']; ?></div>
                                    <!-- <div class="spacer-40"></div> -->

                                    <div class="row d-none d-md-flex ">
                                        <div class="col-md-4 ipad-w-100">

                                            <a href="<?php echo  $value['services_read_more_button_url']; ?>" class="btn btn-warning btn-yellow btn-yellow-responsive mi-btn-yellow fnt-GE-SS-Two fw-bold mi-fnt-18 mbl-w-100"><?php echo  $value['services_read_more_button_text']; ?></a>

                                        </div>
                                        <div class="col-md-8"></div>
                                    </div>

                                </div>

                            </div>
                        <?php } ?>

                    </div>



                </div>
                <div class="col-md-3 tab-mini-w-10"></div>
            </div>

            <div class="spacer-80"></div>

            <div class="services-thumbs desktop-view">

                <div class="row mobile-row">
                    <?php
                    $services = get_field('optcl_services_ar', 'option');
                    foreach ($services as $index => $value) {
                    ?>
                        <div class="item-thumb col col-mobile service_tabs_block" id="item_hover">
                            <center>
                                <a href="" onClick="return false;" data-thumb="serv-<?php echo $index; ?>">
                                    <img src="<?php echo  $value['service_thumbnail']; ?>" class="img-fluid">
                                </a>
                                <p class="caption fnt-white fnt-GE-SS-Two mi-leading-31 fw-bold fnt-25"><?php echo  $value['service_title']; ?></p>
                            </center>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide mobile-view max_width_80">
            <div class="carousel-inner">
                <?php
                $services = get_field('optcl_services_ar', 'option');
                foreach ($services as $index => $value) {
                    // Apply 'active' class only to the first item
                    $activeClass = $index === 0 ? 'active' : '';
                ?>
                    <div class="carousel-item <?php echo $activeClass; ?> ml-15">
                        <a href="" onClick="return false;" data-thumb="serv-<?php echo $index; ?>">
                            <img src="<?php echo $value['service_thumbnail']; ?>" class="">
                        </a>
                        <div class="carousel-caption item-caption caption fnt-white">
                            <h5><?php echo $value['service_title']; ?></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="spacer-120"></div>
    </section>



</div>

<?php get_footer('home'); ?>
<script>
    // JavaScript code to implement counter-rotating values when in view
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                startCounter(entry.target.querySelector('.counter'));
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    }); // Trigger when at least 50% of the element is in view

    document.querySelectorAll('.col-6').forEach(function(item) {
        observer.observe(item);
    });

    function startCounter(element) {
        var fromValue = parseInt(element.getAttribute('data-from'));
        var toValue = parseInt(element.getAttribute('data-to'));
        var speed = parseInt(element.getAttribute('data-speed'));
        var refreshInterval = parseInt(element.getAttribute('data-refresh-interval'));

        var currentValue = fromValue;

        var intervalId = setInterval(function() {
            var increment = Math.floor(Math.random() * 1) + 1; // Random increment value
            currentValue += increment;

            if (currentValue >= toValue) {
                currentValue = toValue; // Ensure currentValue does not exceed toValue
                clearInterval(intervalId); // Stop updating the counter
            }

            element.textContent = currentValue;
        }, refreshInterval);
    }
    // Function to check if the device is a mobile device
</script>