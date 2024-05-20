<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OPTCL
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="border_raidus_20_mi">
	<div class="card border_raidus_20_mi">
		<?php optcl_post_thumbnail(); ?>
		<div class="card-body">


			<header class="entry-header">
				<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

				<?php if ('post' === get_post_type()) : ?>
					<div class="entry-meta">
						<?php
						optcl_posted_on();
						optcl_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->



			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->