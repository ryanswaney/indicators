<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package indicators
 */
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

			<div class="filter-container">

      <h1>Open Working Group Targets by Goal</h1>

			<?php

			$args = array(
      'orderby'           => 'title', 
      'order'             => 'ASC'
      );

			$terms = get_terms( 'goal', $args );
 
 			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
 			?>
			<fieldset class="indicator-filter-controls">
	    <input type="text" id="indicators-search" placeholder="" style="display:none">
      <span class="arr"></span>
	    <select id="indicators-by-goal">
	    	<option value="">All Targets</option>
 			<?php
     		foreach ( $terms as $term ) {
       	echo '<option value="'.$term->slug.'">' . $term->name . '</option>';
     		}
     	?>
     		</select>
      </fieldset>

      </div>

      <?php endif; ?>

      <div id="targets-archive" class="targets-archive">

      <h1 id="goal-title">All Targets</h1>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-archive-targets' );
				?>

			<?php endwhile; ?>

		</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
