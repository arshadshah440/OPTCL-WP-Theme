<?php

/** template for single product details */
?>

<div class="max_wid_700">
    <div class="product_cards">
        <div class="product_image_op">
            <img src="<?php echo  empty(get_field("product_image_url", $currentpost)) ? get_template_directory_uri().'/img/empty.jpg' : get_field("product_image_url", $currentpost); ?>" alt="">
        </div>
        <div class="product_info_op" id="sngl_pic_hd">
            <h2><?php echo get_field('name_ar',$currentpost) ?></h2>
            <p><?php echo get_field('package_info', $currentpost) ?></p>
        </div>
    </div>
    <form id="pdf-form" action="" method="POST">
        <?php echo wp_nonce_field('convert_to_pdf', 'nonce'); // Add nonce field 
        ?>
        <input type="hidden" name="action" value="generate_pdf">
        <input type="hidden" id="html-content" name="html" value="">
        <button class='bg_yellow_btn' id="productdownload_pdf"> <img src="<?php echo get_template_directory_uri() . '/img/download.svg'; ?>" alt=""> <p>تحميل</p></button>

    </form>
    <div class="product_details_info mt-3 mb-5">
        <div class="description_mi">
            <!-- <h3>وصف</h3>
            <p>لوريم إيبسوم دولور الجلوس أميت كونسيكتور</p> -->
        </div>
        <div class="row ">
            <section class="col-6 d-flex align-items-center itecodeleft">
                <h3> رمز الصنف :</h3>&nbsp;
                <p class="mb-0"> <?php echo get_field('item_code', $currentpost) ?></p>
            </section>
            <itemcoderight class="col-6 d-flex align-items-center itecoderight">
                <h3>الباركود : </h3>&nbsp;
                <p class="mb-0"> <?php echo get_field('item_code', $currentpost) ?></p>
            </itemcoderight>
        </div>
    </div>
</div>