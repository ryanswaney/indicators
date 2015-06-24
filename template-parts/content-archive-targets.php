<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php indicators_get_target_tax(); ?> <?php post_class( 'filter-target' ); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </a>
	</header><!-- .entry-header -->
</article><!-- #post-## -->

