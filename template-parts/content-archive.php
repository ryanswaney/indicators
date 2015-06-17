<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </a>
	</header><!-- .entry-header -->

	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

