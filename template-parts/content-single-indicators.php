<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php indicators_acf_get_term_slug(); ?> <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'indicators' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-sidebar">
	<?php $term = get_field('related_sdg');

  if( $term ): ?>

  <h3>Primary goal indicator applies to:</h3>

  <h4>
  	<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
  </h4>

  <?php endif; ?>

  <?php 

	$terms = get_field('secondary_related_sdg');

	if( $terms ): ?>

	<h3>Other goal(s) indicator applies to:</h3>

	<ul>

	<?php foreach( $terms as $term ): ?>

	<h4>
		<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
	</h4>
	<p><?php echo $term->description; ?></p>

	<?php endforeach; ?>

	</ul>

	<?php endif; ?>
  </div><!-- .entry-sidebar -->

	<footer class="entry-footer">
		<?php indicators_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

