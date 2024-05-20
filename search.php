<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package OPTCL
 */

get_header();
$lang = pll_current_language();
?>
<section data-scroll-section>


	<main id="primary" class="site-main search_page_mi">
		<div class="spacer-120 spacer-mobile-60"></div>
		<div class="container max_width_80">
     

			<?php if (have_posts()) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf(
							($lang == 'en') ? esc_html__('Search Results for: %s', 'optcl') : esc_html__('نتائج البحث عن: %s', 'optcl'),
							'<span class="color_yellow_mi_dark">' . get_search_query() . '</span>'
						);

						?>
					</h1>
				</header><!-- .page-header -->
				<div class="row">


					<?php
					/* Start the Loop */

					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
					?>
						<div class="results_search_mi col-6 col-md-3 p-2">


							<?php
							get_template_part('template-parts/content', 'search');
							?>
						</div>
				<?php
					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
				</div>
		</div>
		<div class="spacer-120 spacer-mobile-60"></div>
	</main><!-- #main -->
</section>
<?php
get_sidebar();
get_footer();
