<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

    <h3>Relevant Indicators</h3>
    <p>{dynamic list}</p>

		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-sidebar">

	<?php $term = get_field('target_taxonomy');

  if( $term ): ?>

  <h3>Primary goal Target applies to:</h3>

  <h4>
  	<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
  </h4>

  <?php endif; ?>

  </div><!-- .entry-sidebar -->

	<footer class="entry-footer">
		<?php indicators_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

