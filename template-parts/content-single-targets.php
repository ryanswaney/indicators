<?php
/**
 * Template part for displaying single posts.
 *
 * @package indicators
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>Target</span> ', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

    <?php 

    /*
    *  Query posts for a relationship value.
    *  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
    */

    $indicators = get_posts(array(
      'post_type' => 'indicators',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'relevant_targets', // name of custom field
          'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
          'compare' => 'LIKE'
        )
      )
    ));

    ?>

    <?php if( $indicators ): ?>

      <h3>Proposed Indicators</h3>

      <ul>
      <?php foreach( $indicators as $indicator ): ?>
        <li>
          <a href="<?php echo get_permalink( $indicator->ID ); ?>">
            <?php echo get_the_title( $indicator->ID ); ?>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<div class="entry-sidebar">

	<?php $term = get_field('target_taxonomy');

  if( $term ): ?>

  <h2>Primary goal Target applies to:</h2>

  <p>
  	<a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
  </p>

  <?php endif; ?>

  </div><!-- .entry-sidebar -->

	<footer class="entry-footer">
		<?php indicators_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

