<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package indicators
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'indicators' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'indicators' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</article><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
