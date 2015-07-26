<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php indicators_acf_get_term_slug(); ?> <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>Indicator</span> ', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-sidebar">
  <?php

      $posts = get_field('relevant_targets');

    if ( $posts ): ?>

    <h3>Open Working Group Targets</h3>

    <ul>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <?php the_title(); ?>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>


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

