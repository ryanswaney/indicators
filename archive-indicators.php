<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package indicators
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<div id="ex8">

			<fieldset class="controls">
	      <input type="text" id="ex8f" placeholder="Type here to filter" style="display:none">
	      <select id="ex8s">
	          <option value="">Show all</option>
	          <option value="goal-1">Goal 1</option>
	          <option value="goal-2">Goal 2</option>
	          <option value="goal-3">Goal 3</option>
	      </select>
      </fieldset>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-archive-indicators' );
				?>

			<?php endwhile; ?>

		</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
