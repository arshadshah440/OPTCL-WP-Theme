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
<style>
	.main-navigation ul{
		gap:30px;

	}
	.main-navigation a{
		font-family:GE-SS Two Regular !important;
		font-size:14px;
		font-weight:700;
		color:#282160;
		line-height:26px;
	}
	.main-navigation{
		margin-left:30px !important;
		margin-top:35px;
		margin-bottom:22px;

	}
	.site-branding{
		margin-left:40px;
	}
	.polylang-switcher{
		display:flex;
		gap:10px;
		list-style:none;

	}
	.polylang-switcher img{
		width:35px !important;
		height:auto !important;
	}
</style>

<!--main navigation-->
<div id="main-menu-desktop" class="container-fluid desktop-view remPad">

	<div class="container-fluid">
		<div class="row">
		<nav class="navbar navbar-expand-lg fixed-top justify-content-center">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<div class="site-branding">
						<!-- for the logo to display -->
						<?php
						the_custom_logo(); ?>
						<!-- for the logo to display -->

					</div>
				</a>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'optcl'); ?></button>
						<!-- for the menu to display -->

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-العربية',
							)
						);
						?>
						<!-- for the menu to display -->

					</nav>
						<!-- for the switcher to display -->

					<?php if (function_exists('pll_the_languages')) : ?>
						<div class="polylang-switcher">
							<?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0)); ?>
						</div>
					<?php endif; ?>
						<!-- for the switcher to display -->

					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 langSwitcher-desktop">
						<li class="nav-item">
							<a class="nav-link lang-en active" href="index.php" disabled>EN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fnt-yellow remPadSide" href="#" disabled>|</a>
						</li>
						<li class="nav-item">
							<a class="nav-link lang-ar" href="ar/index.php">AR</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
  </div>
</div>

<div id="main-menu-mobile" class="container mobile-view remPad">

<div class="spacer-10"></div>
<div class="row align-items-center">
    <div class="col-3">
        <center>
            <a class="btn btn-primary bg-blue" data-bs-toggle="offcanvas" href="#offcanvasExample">
                  <i class="fa-solid fa-bars"></i>
            </a>
        </center>

        
    </div>
    <div class="col-6">
    <a class="navbar-brand" href="index.php">
        <img src="../img/logo1.svg" class="img-fluid w-100">
    </a>
    </div>
    <div class="col-3">
        <div class="langSwitcher-mobile">
            <span><a class="nav-link lang-en" href="#" disabled>EN</a></span>
            <span><a class="nav-link fnt-yellow remPadSide lang-ar" href="" disabled>|</a></span>
            <span><a class="nav-link" href="ar/index.php">AR</a></span>
        </div>
    </div>
</div>
<div class="spacer-10"></div>	

<div class="offcanvas offcanvas-start" id="offcanvasExample">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="index.php">
            <img src="../img/logo1.svg" class="img-fluid w-100">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">الرئيسية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">من نحن</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">العلامات التجارية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="media-center.php">الخدمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.php">المركز الإعلامي</a>
            </li>
            <!--
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="services.php">Service 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="services.php">Service 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="services.php">Service 3</a></li>
              </ul>
            </li>		                	
            -->
            <li class="nav-item">
                <a class="nav-link" href="contact-us.php">تواصل معنا</a>
            </li>	

            <li class="nav-item">
                <a class="nav-link" href="distributors.php">الموزعون</a>
            </li>				                			                			                			                
        </ul>
    </div>
</div>


</div>