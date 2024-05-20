<?php

/**
 * The navigation for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OPTCL
 */

?>

<!--main navigation-->
<div id="main-menu-desktop" class="container-fluid desktop-view remPad">

	<div class="container-fluid ">
		<div class="row">
			<nav class="navbar navbar-expand-lg fixed-top justify-content-center">
				<div class="container px-0">
					<div class="site-branding px-0 tab-w-200">
						<!-- for the logo to display -->
						<?php
						the_custom_logo(); ?>
						<!-- for the logo to display -->

					</div>

					<div class="collapse navbar-collapse navbar-collapse-responsive" id="navbarNavDropdown">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'optcl'); ?></button>
							<!-- for the menu to display -->

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-english',
								)
							);
							?>
							<!-- for the menu to display -->

						</nav>
						<!-- for the switcher to display -->

						<?php if (function_exists('pll_the_languages')) : ?>
							<div class="polylang-switcher">
								<?php pll_the_languages(array('show_flags' => 0, 'show_names' => 0, 'show_slug' => 1, 'echo' => 0)); ?>
								<?php
								$languages = pll_the_languages(array('raw' => 1));
								foreach ($languages as $language) {
									echo '<a href="' . $language['url'] . '" class="text-uppercase langchane_anch">' . $language['slug'] . '</a>';
								}
								?>
							</div>
						<?php endif; ?>
						<!-- for the switcher to display -->

						<!-- <li class="nav-item">
							<a class="nav-link lang-en active" href="index.php" disabled>EN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fnt-yellow remPadSide" href="#" disabled>|</a>
						</li>
						<li class="nav-item">
							<a class="nav-link lang-ar" href="ar/index.php">AR</a>
						</li> -->

						<div class="search_mi_header en-mil-30 text_mi_color_blue mt-3" id='desktopsearch_mi'>
							<button type="button" class="font_mi_26 text_mi_color_blue tab-hidden" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-magnifying-glass mi_flip_icons"></i></button>
						</div>

					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- /** popup moda */ -->
<!-- Vertically centered modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="optcl_search_modal">
			<?php echo get_search_form(); ?>

		</div>

	</div>

</div>
<div id="main-menu-mobile" class=" mobile-view ">


	<div class="spacer-10"></div>
	<div class="Mob-navbar">
		<div class="max_width_80">
			<div class="d-flex  gap-4   align-items-center mx-0 p-md-2 px-0 py-2">
				<div class=" px-0" id="mb_nav_mr_4px">
					<a class="btn btn-primary bg-blue py-0 px-0 w_26_23 all_center_content_mi border-0 " data-bs-toggle="offcanvas" href="#offcanvasExample">
						<i class="fa-solid fa-bars"></i>
					</a>

				</div>
				<div class=" px-0" >
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_field('mobile_logo', 'option'); ?>" class="img-fluid w-100 ar-w-98">
					</a>
				</div>
				<div class="px-0 d-flex " id="mb_nav_mr_4px">
					<?php if (function_exists('pll_the_languages')) : ?>
						<div class="langSwitcher-mobile">
							<?php pll_the_languages(array('show_flags' => 0, 'show_names' => 0, 'show_slug' => 1, 'echo' => 0)); ?>
							<?php
							$languages = pll_the_languages(array('raw' => 1));
							foreach ($languages as $language) {
								echo '<a href="' . $language['url'] . '" class="text-uppercase langchane_anch">' . $language['slug'] . '</a>';
							}
							?>
						</div>
					<?php endif; ?>

				</div>
				<div class="search_mi_header mx-0 en-mil-30 text_mi_color_blue mt-0" id='desktopsearch_mi'>
					<button type="button" class="mobile_font_18 text_mi_color_blue tab-hidden" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-magnifying-glass mi_flip_icons"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="spacer-10"></div>

	<div class="offcanvas offcanvas-start" id="offcanvasExample">
		<div class="offcanvas-header">
			<a class="navbar-brand" href="#">
				<img src="<?php echo get_field('mobile_logo', 'option'); ?>" class="img-fluid w-100">
			</a>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-english',
				)
			);
			?>
			<!-- <li class="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="aboutus.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="products.php">Our Brands</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="media-center.php">Media Center</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
						Services
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="services.php">Service 1</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="services.php">Service 2</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item" href="services.php">Service 3</a></li>
					</ul>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="contact-us.php">Contact Us</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="distributors.php">Distributors</a>
				</li> -->

		</div>
	</div>


</div>