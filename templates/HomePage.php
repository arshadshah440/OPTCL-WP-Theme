<?php
/* Template Name: HomePage */
get_header();
?>


<div data-scroll-container>

    <!--home banner-->
    <section id="homebanner" class="non-parallax mt-0 mt-md-5" style="background-image: url('<?php print site_url();?>/wp-content/uploads/2024/01/home-banner1.jpg');" data-scroll-section>
        <div class="container-fluid p-0">
            <div class="spacer-20"></div>
            <div class="spacer-120 spacer-mobile-60"></div>
            <div class="container px-0 tab-margin-50 max_width_80">

                <div class="row align-items-center mx-0">

                    <!--home banner left-->
                    <div class="col-md-6">

                        <div class="row flex-row-reverse flex-md-row">
                            <div class="col-2 col-md-2 px-0">

                                <div class="home-banner-social column gap-2 justify-content-center home-banner-social-responsive">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>

                            </div>
                            <div class="col-md-10 col-10 px-0">

                                <h3 class="fnt-40 fnt-blue fnt-poppins-regular remMar mobile_font_15"><?php echo get_field('home_hero_sub_heading'); ?></h3>
                                <h1 class=" fnt_60_mi nomarginbb mobile_font_31"><?php echo get_field('home_hero_heading'); ?></h1>

                                <div class="spacer-20"></div>

                                <div class="row mx-0 ">
                                    <div class="col-md-3 col-3 p-0">

                                        <img src="<?php echo get_field("home_hero_logo"); ?>" class="img-fluid w-100 logo-img logo-img-responsive">
                                        <div class="mi_spacer-40"></div>

                                        <a href="<?php echo get_field("home_hero_button_link"); ?>" class="btn btn-warning btn-yellow  read-more-responsive fnt-18 tab-bt-w-140"><?php echo get_field("home_hero_button_text"); ?></a>

                                    </div>
                                    <div class="col-md-2 d-none d-md-block">
                                    </div>
                                    <div class="col-md-5 col-9">

                                        <div class="max_160_mi">
                                            <h2 class="year_brown_color mobile_font_31 fnt-poppins-block fnt-70 remMar fnt-is-brown"><b><?php echo get_field("home_hero_year"); ?></b></h2>
                                            <h3 class="fnt-blue fnt-poppins-regular fnt-30 mobile_font_31"><?php echo get_field("home_hero_year_text"); ?></h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="spacer-20"></div>
                    </div>

                    <!--home banner right-->
                    <div class="col-md-6 p-0">

                        <div class="row flex-row-reverse flex-md-row mx-0">
                            <div class="col-md-5"></div>
                            <div class="col-md-7 mx-0 px-0 col-8">
                                <div class="teardropbox">
                                    <img id="bg-teardrop" src="<?php echo site_url('wp-content/uploads/2024/01/teardrop.svg'); ?>" class="img-fluid w-100 pb-red">

                                    <div id="teardropSLide">

                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8 ipad-margin-set">

                                                <div id="teardropProducts" class="carousel slide carousel-fade" data-bs-ride="carousel">

                                                    <div class="carousel-inner">
                                                        <?php $images = get_field('home_hero_slider');
                                                        foreach ($images as $index => $value) {
                                                            if ($index == 0) {
                                                        ?>
                                                                <div class="carousel-item active " data-border="<?php echo $value['slider_border_color']; ?>"><img src="<?php echo $value['slide_image']; ?>" class="d-block    mx-auto img-fluid  teardrop-img" current-index='<?php echo $index; ?>'></div>
                                                            <?php } else {
                                                            ?>
                                                                <div class="carousel-item" data-border="<?php echo $value['slider_border_color']; ?>"><img src="<?php echo $value['slide_image']; ?>" class="d-block  mx-auto  img-fluid  teardrop-img" current-index='<?php echo $index; ?>'></div>
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
                                            <div class="col-md-2"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-block d-md-none p-0">
                                <div id="teardropThumbsmobile" class="row carousel-indicators mobile-row teardropThumbsmobile mx-0 ">
                                    <?php $images = get_field('home_hero_slider');
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

                        </div>

                        <div class="spacer-20"></div>

                    </div>
                </div>

                <div class="spacer-40"></div>

                <div id="teardropThumbs" class="row carousel-indicators mobile-row owl-carousel d-none d-md-block">
                    <?php $images = get_field('home_hero_slider');
                    foreach ($images as $index => $value) {
                    ?>
                        <div class="col" style="padding: 0px 2px"><img src="<?php echo  $value['slide_image']; ?>" class="img-fluid img-partners mx-0" data-bs-target="#teardropProducts" data-bs-slide-to="<?php echo  $index; ?>" class="active"></div>
                    <?php } ?>
                </div>



            </div>

            <div class="spacer-80 d-none d-md-block"></div>
        </div>

    </section>

    <!--about us-->

    <section id="aboutus" class="" style=" min-height: 50vh;" data-scroll-section>


        <div class="container-fluid bg_change_color_mi px-0">
            <div class="spacer-70 spacer-mobile-60"></div>

            <div class="container max_width_80 p-0" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
                <div class="row align-items-center mx-0">

                    <div class="col-md-5 px-0">

                        <h3 class="fnt-white d-flex align-items-center global-heading-white  justify-content-md-start mobile_font_24">
                            <img src="<?php echo get_field("about_section_icon"); ?>" class="img-fluid fa-mar-right-21">
                            <?php echo get_field("about__section_heading"); ?>
                        </h3>
                        <div class="spacer-18"></div>

                        <p class="fnt-white mobile_text_justified global-pct-white mi_mb_12 mobile_font_18"><?php echo get_field("about_section_description"); ?></p>
                        <!-- <div class="spacer-20"></div> -->


                        <a href="<?php echo get_field("about_button_link"); ?>" id="home_about_btn" class="btn btn-warning desktop_font_18  btn-yellow read-more-responsive"><?php echo get_field("about_button_text"); ?></a>

                        <div class="spacer-26"></div>

                        <div class="row mx-0 ">
                            <div class="w-auto" id="hover_comp">
                                <a href="<?php echo get_field("about_company_cataloge_link"); ?>" target="_blank" id="hover_link" class="fnt-white font_weight_700_mi d-flex align-items-center fnt-20 justify-content-center justify-content-md-start mi_font_12">
                                    <i class="fa-solid fa-book fnt-yellow  mi_mr_10"></i>
                                    <?php echo get_field("about_company_cataloge_text"); ?>
                                </a>
                                <div class="spacer-20"></div>
                            </div>

                            <div class="w-auto" id="hover_comp">

                                <a href="<?php echo get_field("company_file_link"); ?>" target="_blank" id="hover_link" class="fnt-white mi_font_12 font_weight_700_mi d-flex align-items-center fnt-20 justify-content-center justify-content-md-start">
                                    <i class="fa-solid fa-file fnt-yellow  mi_mr_10"></i>
                                    <?php echo get_field("company_file_text"); ?>
                                </a>
                                <div class="spacer-20"></div>
                            </div>
                        </div>


                        <div class="spacer-20 d-none d-md-block "></div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-6 px-0">


                        <video id="background-video" autoplay="" loop="" muted="" class="w-100 bordered-shadow h-100" style="aspect-ratio: 1.59; object-fit: cover; border-top-right-radius: 0px;">
                            <source src=" <?php echo get_field("about_section_video"); ?>" style="object-fit: cover;" type="video/mp4">
                        </video>


                        <div class="spacer-20"></div>
                    </div>


                </div>
            </div>

            <div class="spacer_170_mi d-block d-md-none"></div>

            <!--floating details-->

            <div id="floating-details" class="container-fluid  max_width_80 floating_dtails_mi" data-scroll data-scroll-direction="vertical" data-scroll-speed="3" data-scroll-call="triggerCounter">
                <div class="container bordered-shadow -mt-150 px-0">

                    <div class="row mx-0">
                        <div class="col-md-2 px-0"></div>

                        <?php if (have_rows('company_stats_list')) {

                            while (have_rows('company_stats_list')) {
                                the_row();
                                $icon_img = get_sub_field('icon_image_en');
                                $icon = get_sub_field('company_stats_list_icon');
                                $heading = get_sub_field('company_stats_list_heading');
                                $numbers = get_sub_field('company_stats_list_numbers');
                        ?>
                                <div class="col-3 col-md-2 px-0">
                                    <div class="spacer-40"></div>
                                    <center>
                                        <!-- <i class="fd-icon fa-solid fa-<?php echo $icon; ?> fnt-brown"></i> -->
                                        <p> <img src="<?php echo $icon_img; ?>" alt=""></p>
                                        <p class="fd-count fnt-blue remMar counter mi_font_12  " data-from="0" data-to="<?php echo $numbers; ?>" data-speed="5000" data-refresh-interval="25"></p>
                                        <p class="fd-type fnt-blue remMar mi_font_12"><?php echo $heading; ?></p>
                                    </center>
                                    <div class="spacer-40"></div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                        <div class="col-md-2 px-0"></div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!--products-->

    <section id="products" class="parallax mi_z_index_10_mi" data-scroll-section>
        
        <div class="spacer-60"></div>

        <div class="container" data-scroll data-scroll-repeat data-scroll-direction="vertical" data-scroll-speed="3">
            <div class="row max_width_80">
                <div class="col-md-6 px-0 ipad-w-100">

                    <div class="spacer-120"></div>
                    <h3 class="fnt-blue d-flex  flex-row align-items-center global-heading-blue mobile_font_24">
                        <img src="<?php echo get_field('department_product_section_icons') ?>" class="img-fluid fa-mar-right-20">
                        <?php echo get_field('department_product_section_heading') ?>
                    </h3>
                    <div class="spacer_148_mi"></div>
                    <div class="wrapper_carousel">


                        <div class="row justify-content-center gapy_45 mx-0 px-0 d-none d-md-flex">

                            <?php if (have_rows('departments', 'option')) {
                                while (have_rows('departments', 'option')) {
                                    the_row();
                                    $depiconurl = get_sub_field('department_icon');
                                    $depname = get_sub_field('department_name');
                                    $depurl = get_sub_field('department_details_page_url_');
                            ?>
                                    <div class="col-md-6 px-0 mx-0">
                                        <a href="<?php echo $depurl; ?>">
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
                        <div class="owl-carousel d-block d-md-none" id="product_dep_carousel">
                            <?php if (have_rows('departments', 'option')) {
                                while (have_rows('departments', 'option')) {
                                    the_row();
                                    $depiconurl = get_sub_field('department_icon');
                                    $depname = get_sub_field('department_name');
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
                <div class="col-md-6 mobile-hidden">

                    <div class="prod-float z_index_mi_999" data-scroll data-scroll-direction="vertical" data-scroll-speed="5">
                        <img src="<?php echo get_field('department_product_section_image') ?>" class="img-fluid mbl-hidden">
                    </div>


                </div>
            </div>

        </div>
        <!-- <img src="<?php echo get_field('department_product_section_image') ?>" class="products-bg-img mbl-hidden"> -->
        <div class="spacer-120 spacer-mobile-53"></div>

    </section>

    <!--services-->
    <section id="services" class="non-parallax service-parallax mi_z_index_0_mi" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url('<?php echo get_field('service_section_background_image'); ?>');" data-scroll-section>
        <div class="spacer-57 spacer-mobile-60"></div>

        <div class="container px-0 max_width_80" data-scroll-direction="vertical" data-scroll-repeat data-scroll-speed="3">
            <h3 class="fnt-white d-flex align-items-center  justify-content-md-start global-heading-white mobile_font_24">
                <img src="<?php echo get_field('service_section_heading_icons'); ?>" class="img-fluid fa-mar-right-22">
                <?php echo get_field('service_section_heading'); ?>
            </h3>
            <div class="spacer-29"></div>

            <div class="row mbl-mrgn-0">
                <div class="col-md-3"></div>
                <div class="col-md-6 ipad-w-100 px-0">

                    <div class="services-gallery">

                        <?php
                        $services = get_field('optcl_services', 'option');
                        foreach ($services as $index => $value) {

                        ?>
                            <div class="service-items services-header border_mi_skew ser-card <?php echo ($index == 0) ? 'active' : ''; ?>" id="serv-<?php echo $index; ?>">

                                <div class="mi_top_image">
                                    <img src="<?php echo  get_template_directory_uri(); ?>/img/services-plate.svg" alt="">
                                </div>
                                <div class="bottom">
                                    <h4 class="text-color-blue global-pr-heading mobile_font_24"><?php echo  $value['service_title']; ?></h4>
                                    <div class="text-color-blue mobile_font_16 desktop_font_20 mobile-text-justify servicedescmi global-content-blue para_color_blue7 "><?php echo  $value['service_descritption']; ?></div>
                                    <div class="spacer-35 d-none d-md-block "></div>

                                    <div class="row  d-none d-md-flex ">
                                        <div class="col-md-4 tab-w-50">

                                            <a href="<?php echo  $value['services_read_more_button_url']; ?>" class="btn btn-warning btn-yellow read-more-responsive w-100"> <?php echo  $value['services_read_more_button_text']; ?></a>

                                        </div>
                                        <div class="col-md-8"></div>

                                    </div>

                                </div>

                            </div>
                        <?php } ?>

                    </div>



                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="spacer-80"></div>

            <div class="services-thumbs desktop-view ">

                <div class="row mobile-row">
                    <?php
                    $services = get_field('optcl_services', 'option');
                    foreach ($services as $index => $value) {
                    ?>
                        <div class="item-thumb col col-mobile service_tabs_block" id="item_hover">
                            <center>
                                <a href="" onClick="return false;" data-thumb="serv-<?php echo $index; ?>">
                                    <img src="<?php echo  $value['service_thumbnail']; ?>" class="img-fluid">
                                </a>
                                <p class="caption fnt-white"><?php echo  $value['service_title']; ?></p>
                            </center>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide mobile-view max_width_80">
            <div class="carousel-inner">
                <?php
                $services = get_field('optcl_services', 'option');
                foreach ($services as $index => $value) {
                    // Apply 'active' class only to the first item
                    $activeClass = $index === 0 ? 'active' : '';
                ?>
                    <div class="carousel-item <?php echo $activeClass; ?> ml-15" data-thumb="serv-<?php echo $index; ?>">
                        <a href="" data-thumb="serv-<?php echo $index; ?>">
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
        

        <div class="spacer-60"></div>
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
</script>