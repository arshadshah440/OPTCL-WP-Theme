<?php

get_header();

$lang=pll_current_language();
$pageid= ($lang == 'en') ? 626 : 541;
$depfield= ($lang == 'en') ? 'category_names' : 'category_names_ar';
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
        <div class="container-fluid bg-white">
            <div class="spacer-120 spacer-mobile-60"></div>
            <!-- <div class="spacer-40 mobile-remove-space"></div> -->
            <div class="container px-0">
                <h3 class="fnt-blue d-flex align-items-center justify-content-center justify-content-md-start global-heading-blue-ar fnt-GE-SS-Two fnt-30 mi-leading-26 fw-bold">
                    <img src="<?php echo get_field("heading_icon_ar", $pageid); ?>" class="img-fluid fa-mar-left-20">
                    <?php echo get_field("heading_text_ar", $pageid); ?>
                </h3>
                <div class="spacer-54"></div>

                <div class="product-filter button-group filters-button-group">
                    <div class="row justify-content-between">
                        <?php
                        $rows = get_field($depfield, $pageid);
                        if ($rows) {
                            foreach ($rows as $row) {
                        ?>
                                <div class="col">
                                    <center>
                                        <button class="button d-flex align-items-center justify-content-center mobile-margin-bottom-20  fnt-light-blue fnt-GE-SS-Two fnt-25 mi-leading-26 fw-bold global-pr-heading-ar products-filter-button-22rem product_department_mi" data-department="<?php echo $row['category_type']; ?>">
                                            <img src="<?php echo $row['name_icon']; ?>" class="img-fluid fa-mar-left-15"> <?php echo $row['name']; ?>
                                        </button>
                                    </center>
                                </div>
                            <?php } ?>
                        <?php  } ?>

                    </div>

                </div>




            </div>
            <div class="spacer-40"></div>
        </div>

    </section>
</div>