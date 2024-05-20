<?php /* Template Name: Products */

get_header();
?>
<style>
  /* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  /* box-shadow: inset 0 0 5px grey;  */
  background:white;
  border-radius: 10px;
  border-left:6px solid #282160;
  border-right:6px solid #282160;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #FFD200; 
  border-radius: 10px;
  border-left:6px solid #FFD200;
  border-right:6px solid #FFD200;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #E49B0F; 
}

</style>
<?php
// $api_key = 'c1282a90-b365-4ea1-8475-8ecc92b41e52';
// $api_url_cat = 'https://new.optclsales.com/api/v1/marketing/categories';

// $api_url_br = 'https://new.optclsales.com/api/v1/marketing/brands';

// $api_url_pr = 'https://new.optclsales.com/api/v1/marketing/products';


// // Set the request headers including the API key
// $headers = array(
//   'Content-Type' => 'application/json', // Adjust this based on your API's requirements
//   'api-Key' => $api_key,
// );

// // Make the API request Category
// $response_cat = wp_remote_get($api_url_cat, array('headers' => $headers));

// if (is_wp_error($response_cat)) {
//   echo 'Error fetching API data';
// } else {

//   $data_cat = json_decode(wp_remote_retrieve_body($response_cat), true);
//   // Display the data on the page
// }
// // Make the API request Brands
// $response_br = wp_remote_get($api_url_br, array('headers' => $headers));

// if (is_wp_error($response_br)) {
//   echo 'Error fetching API data';
// } else {

//   $data_br = json_decode(wp_remote_retrieve_body($response_br), true);
//   // Display the data on the page
// }
// // Make the API request Products
// $response_pr = wp_remote_get($api_url_pr, array('headers' => $headers));

// if (is_wp_error($response_pr)) {
//   echo 'Error fetching API data';
// } else {

//   $data_pr = json_decode(wp_remote_retrieve_body($response_pr), true);
//   // Display the data on the page
// }

// $posts_per_page = 9;
// $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

// // Divide the API data into chunks of 9
// $chunks = array_chunk($data_pr['data'], $posts_per_page);

// // Display the current chunk
// $current_chunk = isset($chunks[$current_page - 1]) ? $chunks[$current_page - 1] : array();

$currenttab=false;
if (isset($_GET['dep']) && !empty($_GET['dep'])) {
  $currenttab=true;
  $response = $_GET['dep'];
  $response = strtoupper($response);
  $args = array(
    'post_type' => 'optcl-product', // Adjust post type if needed
    'posts_per_page' => 9, // Set the number of posts to display, -1 for all
    'meta_query' => array(
      array(
        'key' => 'material_division', // Replace 'your_acf_field_name' with your ACF field name
        'value' => $response, // Replace 'desired_value' with the value you're searching for
        'compare' => '=', // Use '=' for exact match
      ),
    ),
  );

  $posts_query = new WP_Query($args);
  $results = "";
  if ($posts_query->have_posts()) :
    while ($posts_query->have_posts()) : $posts_query->the_post();
      // Display your post content as needed

      $results .= productloop(get_the_ID());

    endwhile;
    wp_reset_postdata();
  else :
    // No posts found
    $results = "<p>No Products Found.</p>";
  endif;
}


?>


<!--header-->


<div data-scroll-container>


  <section class="non-vh" data-scroll-section>
    <?php
    // echo sizeof($current_chunk);
    ?>
    <?php
    // echo $current_page; 
    ?>
    <div class="container-fluid bg-white" id="brands_en_tabs_sect">
      <div class="spacer-120 desktop-spacer-100"></div>
      <div class="spacer-40"></div>
      <div class="container" id="brand_hd_tbs">
        <h3 class="fnt-blue d-flex align-items-center global-heading-blue">
          <img src="<?php echo get_field("heading_icon"); ?>" class="img-fluid fa-mar-right-20">
          <?php echo get_field("heading_text"); ?>
        </h3>
        <div class="spacer-20 desktop-spacer-50"></div>

        <div class="product-filter button-group filters-button-group">
          <div class="row">
            <?php if (have_rows('category_names')) :

              while (have_rows('category_names')) : the_row();  ?>

                <div class="col pd-bottom-15">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue  global-pr-heading products-filter-button-22rem 
                    products-filter-button-text-25 product_department_mi" data-department="<?php echo get_sub_field('category_type'); ?>">
                      <img src="<?php echo get_sub_field('name_icon'); ?>" class="img-fluid fa-mar-right-20"> <?php echo get_sub_field('name'); ?>
                    </button>
                  </center>

                </div>
              <?php endwhile; ?>
            <?php endif;
            //         $cate_name = "abcddeehhhkkkk";
            //         $taxonomy = 'product-category';
            //         $cat_id = 003;

            //         $exist = term_exists($cate_name, $taxonomy);

            //         $args = array(
            //             'slug' => $item['slug'],

            //         );
            // $category = get_term_by('name', 'BORDON', 'brand');

            //             // // echo '<pre>';
            //             // $term_id = wp_insert_term($cate_name, $taxonomy, $args);
            //             // update_term_meta( $term_id['term_id'], 'tax_code', 222 );
            // var_dump($category->term_id);
            // var_dump($category);
            // echo '</pre>';
            ?>

          </div>

        </div>



        <div class="spacer-77"></div>
      </div>
    </div>

  </section>

  <section class="" data-scroll-section>

    <div class="container-fluid bg-white">

      <div class="container">

        <div class="row">
          <div class="col-md-3">

            <form action="">
              <?php if(!wp_is_mobile()){ ?>
              <div class="accordion desktop-max-w-271" id="filter-side">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="filter-headingOne">
                    <button data-bs-toggle="modal" data-bs-target="#myModal" class="accordion-button collapsed" type="button" onclick="toggleAccordion('filter-collapseOne')">
                      <div class="row align-items-center w-100">
                        <div class="col-8 global-phd-white" id="filter_hd_en">
                          <?php echo get_field("filter_heading_1"); ?>
                          
                        </div>
                        <div class="col-2">
                        <a href="" id="category_en_reset"><i class="fas fa-undo"></i></a>
                        </div>
                        
                        <div class="col-2">
                          <img src="<?php echo get_field("drop_down_icon"); ?>" class="img-fluid">
                        </div>
                      </div>
                    </button>
                  </h2>
                  <?php 
                  //if(!wp_is_mobile()){ 
                    ?>
                  <div id="filter-collapseOne" class="accordion-collapse text-start collapse" aria-expanded="false">
                    <div class="accordion-body">

                      <input type="text" name="search-categories" class="form-control filter-field-text" placeholder="Search Brands" oninput="filterCategories()">

                      <div class="spacer-20"></div>

                      <div class="filter-list" id="categories-checkboxes">
                        <?php
                        // foreach ($data_cat['data'] as $item) { 
                        //   $args = array(
                        //     'post_type' => 'optcl-product',
                        //     'tax_query' => array(
                        //         array(
                        //             'taxonomy' => 'product-category',
                        //             'field'    => 'slug',
                        //               // Change 'product-category' to your actual category slug
                        //         ),
                        //     ),
                        //     'posts_per_page' => -1, // Retrieve all posts
                        // );
                        //   $args = array(
                        //     'name' => 'product-category'
                        //   );

                        //   $output = 'objects'; // or names
                        //   $taxonomies= get_taxonomies( $args, $output ); 
                        //      var_dump($taxonomies);                        
                        $taxonomies = get_terms(array(
                          'taxonomy' => 'product-category',
                          'hide_empty' => false
                        ));
                        // print_r($terms);
                        foreach ($taxonomies as $category) {
                        ?>
                          <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox" value="<?php echo esc_attr($category->term_id); ?>" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                              <?php echo esc_attr($category->name); ?>
                            </label>
                          </div>
                        <?php
                        }
                        //wp_reset_postdata();  
                        ?>

                      </div>

                    </div>
                  </div>
                </div>
                        <?php
                      // } 
                       ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="filter-headingTwo">
                    <button class="accordion-button collapsed" type="button" onclick="toggleAccordion('filter-collapseTwo')">

                      <div class="row align-items-center w-100">
                        <div class="col-8 global-phd-white" id="filter_hd_en">
                          <?php echo get_field("filter_heading_2"); ?>
                        </div>
                        <div class="col-2">
                        <a href="" id="brand_en_reset"><i class="fas fa-undo"></i></a>
                        </div>
                        <div class="col-2">
                          <img src="<?php echo get_field("drop_down_icon"); ?>" class="img-fluid">
                        </div>
                      </div>

                    </button>
                  </h2>
                  <div id="filter-collapseTwo" class="accordion-collapse text-start collapse" aria-expanded="false">
                    <div class="accordion-body">

                      <input type="text" name="search-brands" class="form-control filter-field-text" placeholder="Search Categories" oninput="filterBrands()">

                      <div class="spacer-20"></div>

                      <div class="filter-list" id="brands-checkboxes">

                        <?php
                        // foreach ($data_br['data'] as $item) { 


                        $taxonomies = get_terms(array(
                          'taxonomy' => 'brand',
                          'hide_empty' => false
                        ));
                        // print_r($terms);
                        foreach ($taxonomies as $category) {

                        ?>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo esc_attr($category->term_id); ?>" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                              <?php echo esc_attr($category->name); ?>
                            </label>
                          </div>
                        <?php }
                        ?>

                      </div>

                    </div>
                  </div>
                </div>

              </div>
              <?php }else{ ?>
                <div class="accordion desktop-max-w-271" id="filter-side">
                <div class="row" id="brands_mb_cat_br_en">
                  <div class="col-5" id="cat_en_mb">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="filter-headingOne">
                    <button data-bs-toggle="modal" data-bs-target="#myModal" class="accordion-button collapsed" type="button" onclick="toggleAccordion('filter-collapseOne')">
                      <div class="row align-items-center w-100" id="cat_en_child">
                        <div class="col-6 global-phd-white mobile_category_en_hd" id="filter_hd_en">
                          <?php echo get_field("filter_heading_1"); ?>
                        </div>
                        <div class="col-1">
                        <a href="" id="category_en_reset"><i class="fas fa-undo mobile_reset_icon"></i></a>
                        </div>
                        <div class="col-3">
                          <img src="<?php echo get_field("drop_down_icon"); ?>" class="img-fluid">
                        </div>
                      </div>
                    </button>
                  </h2>
                  <?php 
                  //if(!wp_is_mobile()){ 
                    ?>
                  <div id="filter-collapseOne" class="accordion-collapse text-start collapse" aria-expanded="false">
                    <div class="accordion-body">

                      <input type="text" name="search-categories" class="form-control filter-field-text" placeholder="Search" oninput="filterCategories()">

                      <div class="spacer-20"></div>

                      <div class="filter-list" id="categories-checkboxes">
                        <?php
                        // foreach ($data_cat['data'] as $item) { 
                        //   $args = array(
                        //     'post_type' => 'optcl-product',
                        //     'tax_query' => array(
                        //         array(
                        //             'taxonomy' => 'product-category',
                        //             'field'    => 'slug',
                        //               // Change 'product-category' to your actual category slug
                        //         ),
                        //     ),
                        //     'posts_per_page' => -1, // Retrieve all posts
                        // );
                        //   $args = array(
                        //     'name' => 'product-category'
                        //   );

                        //   $output = 'objects'; // or names
                        //   $taxonomies= get_taxonomies( $args, $output ); 
                        //      var_dump($taxonomies);                        
                        $taxonomies = get_terms(array(
                          'taxonomy' => 'product-category',
                          'hide_empty' => false
                        ));
                        // print_r($terms);
                        foreach ($taxonomies as $category) {
                        ?>
                          <div class="form-check">
                            <input class="form-check-input category-checkbox" type="checkbox" value="<?php echo esc_attr($category->term_id); ?>" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                              <?php echo esc_attr($category->name); ?>
                            </label>
                          </div>
                        <?php
                        }
                        //wp_reset_postdata();  
                        ?>

                      </div>

                    </div>
                  </div>
                </div>
                        <?php
                      // } 
                       ?>
                       </div>
                       <div class="col-5" id="br_en_mb">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="filter-headingTwo">
                    <button class="accordion-button collapsed" type="button" onclick="toggleAccordion('filter-collapseTwo')">

                      <div class="row align-items-center w-100">
                        <div class="col-6 global-phd-white mobile_category_en_hd" id="filter_hd_en">
                          <?php echo get_field("filter_heading_2"); ?>
                        </div>
                        <div class="col-1">
                        <a href="" id="brand_en_reset"><i class="fas fa-undo mobile_reset_icon"></i></a>
                        </div>
                        <div class="col-3">
                          <img src="<?php echo get_field("drop_down_icon"); ?>" class="img-fluid">
                        </div>
                      </div>

                    </button>
                  </h2>
                  <div id="filter-collapseTwo" class="accordion-collapse text-start collapse" aria-expanded="false">
                    <div class="accordion-body">

                      <input type="text" name="search-brands" class="form-control filter-field-text" placeholder="Search" oninput="filterBrands()">

                      <div class="spacer-20"></div>

                      <div class="filter-list" id="brands-checkboxes">

                        <?php
                        // foreach ($data_br['data'] as $item) { 


                        $taxonomies = get_terms(array(
                          'taxonomy' => 'brand',
                          'hide_empty' => false
                        ));
                        // print_r($terms);
                        foreach ($taxonomies as $category) {

                        ?>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?php echo esc_attr($category->term_id); ?>" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">
                              <?php echo esc_attr($category->name); ?>
                            </label>
                          </div>
                        <?php }
                        ?>

                      </div>

                    </div>
                  </div>
                </div>
                </div>
              </div>
              </div>
                <?php } ?>
            </form>
          </div>

          <div class="col-md-9" id="products_sect_mi">

            <div class="row grid row-padding-x mx-0" id="products_display_mi">

              <?php
              if (isset($_GET['dep'])) {
                echo $results;
              } else {


                // foreach ($current_chunk as $item) { 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                  'post_type'      => 'optcl-product',
                  'posts_per_page' => 9,
                  'paged' => $paged
                );

                $custom_query = new WP_Query($args);

                while ($custom_query->have_posts()) : $custom_query->the_post();
                
                  $custom_field_value = get_post_meta(get_the_ID(), 'product_image_url', true);
                  $image_url = (empty($custom_field_value)) ? get_template_directory_uri() . '/img/empty.jpg' : $custom_field_value;
                  $postlink='';
                  if($lang == 'en'){
                    $postlink = home_url('en/optcl-products/?id='.get_the_ID());
                  }else{
                    $postlink = home_url('منتجات//?id='.get_the_ID());
                  }

              ?>

                  <div class="col-md-4 col-6 element-item food-products">
                    <a href="<?php echo $postlink; ?>">
                      <div class="prod-item product-item-h-350 prod-item-en">
                        <div class="mi_h-70 bg-light">
                          <img src="<?php echo $image_url; ?>" class="img-fluid custom-image-size h-100">
                        </div>

                        <div class="caption mbl-pd-0">
                          <h5 class="fnt-brown custom-caption-size caption-en ipad-font-size"><?php echo get_the_title(); ?></h5>
                          <!-- <p class="fnt-15" style="color: #231F20">Lorem ipsum dolor sit amet, consectetur</p> -->
                          <p><?php echo get_field('package_info') ?></p>
                        </div>
                      </div>
                    </a>
                    <div class="spacer-20 desktop-spacer-30"></div>
                  </div>
              <?php endwhile;
                wp_reset_postdata();
              }
              ?>
            </div>
            <?php
            // "Read More" button
            // if ($current_page < count($chunks)) {
            // $next_page++;
            // echo '<div class="read-more-container custom-read-more-btn-styles">
            // <a class="read-more-button" href="' . esc_url(get_pagenum_link($next_page)) . '">Read More</a>
            // </div>';
            // echo '';
            // echo '';
            // }
            ?>
            <div class="read-more-container custom-read-more-btn-styles">
              <button id="read-more-button" class="read-more-button">Read More</button>
            </div>

          </div>
        </div>

      </div>

      <div class="spacer-120"></div>
    </div>

  </section>
  <!-- **************** Model For Mobile *********** -->

  <!-- The Modal -->
<!-- <div class="modal fade" id="catmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content mi_width_900 rounded-4">

    </div>
  </div>
</div>
   -->

  <?php get_footer(); ?>



  <!-- <div class="col">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue is-checked" data-filter="*">
                      <i class="fa-solid fa-table-list fa-mar-right icons"></i> All
                    </button>
                  </center>
                </div> -->

  <!-- <div class="col">
                  <center>
                    <button class="button d-flex align-items-center justify-content-center fnt-blue" data-filter=".non-food-products">
                      <img src="<?php echo get_field("cat_2_icon"); ?>" class="img-fluid fa-mar-right icons"> <?php echo get_field("cat_2_name"); ?>
                    </button>                    
                  </center>

                </div>

                <div class="col">
                  <center>
                     <button class="button d-flex align-items-center justify-content-center fnt-blue" data-filter=".pet-products">
                      <img src="<?php echo get_field("cat_3_icon"); ?>" class="img-fluid fa-mar-right icons"> <?php echo get_field("cat_3_name"); ?>
                    </button>                    
                  </center>
                </div> -->

  <!-- <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                              <label class="form-check-label" for="checkbox2">
                                Lorem ipsum
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                              <label class="form-check-label" for="checkbox3">
                                Lorem ipsum
                              </label>
                            </div>                                                         -->

  <!-- <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                              <label class="form-check-label" for="checkbox2">
                                Lorem ipsum
                              </label>
                            </div>

                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                              <label class="form-check-label" for="checkbox3">
                                Lorem ipsum
                              </label>
                            </div>                                                         -->


  <!-- 
                <div class="col-md-4 element-item pet-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-2.jpg" class="img-fluid">

                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-3.jpg" class="img-fluid">
               
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-4.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-5.jpg" class="img-fluid">
                     
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                   
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item pet-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-6.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                  
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-7.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                  
                    </div>                    
                  </a>

                  <div class="spacer-20"></div>                  
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-8.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                  
                    </div>                     
                  </a>

                  <div class="spacer-20"></div>                 
                </div>

                <div class="col-md-4 element-item non-food-products">
                  <a href="">
                    <div class="prod-item">
                      <img src="img/products/prod-9.jpg" class="img-fluid">
                      
                      <div class="caption">
                        <h5 class="fnt-brown">Lorem ipsum</h5>
                        <p class="fnt-15">Lorem ipsum dolor sit amet consectetur.</p>                      
                      </div>                  
                    </div>                    
                  </a>
 
                  <div class="spacer-20"></div>                 
                </div> -->

  <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('#checkboxes input[type="checkbox"]');
        let checkedValues = []; // Array to store checked values

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    checkedValues.push(this.value); // Add value to array if checked
                } else {
                    const index = checkedValues.indexOf(this.value);
                    if (index !== -1) {
                        checkedValues.splice(index, 1); // Remove value from array if unchecked
                    }
                }
                console.log('Checked values:', checkedValues);
            });
        });
    });
</script> -->
  <script>
    jQuery(document).ready(function() { 
      <?php
        if($currenttab){
          ?>
        $(".product_department_mi[data-department='<?php echo $_GET['dep']; ?>']").addClass('is-checked');

          <?php
        }
        
        ?>

    });
    function toggleAccordion(targetId) {
  var accordion = document.getElementById(targetId);
  var button = document.querySelector('.accordion-button[onclick="toggleAccordion(\'' + targetId + '\')"]');

  if (accordion.classList.contains('show')) {
    accordion.classList.remove('show');
    button.setAttribute('aria-expanded', 'false');
    button.style.borderRadius = '0rem 2rem 2rem 2rem'; // Set border-radius to 0 when accordion is collapsed
  } else {
    accordion.classList.add('show');
    button.setAttribute('aria-expanded', 'true');
    button.style.borderRadius = '0rem 2rem 0rem 0rem'; // Set border-radius to 5px when accordion is expanded
  }
}



    function filterBrands() {
      var input, filter, checkboxes, checkbox, label, i, txtValue;
      input = document.getElementsByName("search-brands")[0];
      filter = input.value.toUpperCase();
      checkboxes = document.querySelectorAll("#brands-checkboxes .form-check");
      for (i = 0; i < checkboxes.length; i++) {
        checkbox = checkboxes[i].getElementsByClassName("brand-checkbox")[0];
        label = checkboxes[i].getElementsByClassName("form-check-label")[0];
        txtValue = label.textContent || label.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          checkboxes[i].style.display = "";
        } else {
          checkboxes[i].style.display = "none";
        }
      }
    }

    function filterCategories() {
      var input, filter, checkboxes, checkbox, label, i, txtValue;
      input = document.getElementsByName("search-categories")[0];
      filter = input.value.toUpperCase();
      checkboxes = document.querySelectorAll("#categories-checkboxes .form-check");
      for (i = 0; i < checkboxes.length; i++) {
        checkbox = checkboxes[i].getElementsByClassName("category-checkbox")[0];
        label = checkboxes[i].getElementsByClassName("form-check-label")[0];
        txtValue = label.textContent || label.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          checkboxes[i].style.display = "";
        } else {
          checkboxes[i].style.display = "none";
        }
      }
    }
  </script>