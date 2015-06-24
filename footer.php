<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package indicators
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery.bigfoot();
</script>

<?php if ( is_post_type_archive( array( 'indicators', 'targets' ) ) ) : ?>
<script type="text/javascript">
    var filter_indicators = jQuery('#indicators-search').instaFilta({
        scope: '#indicators-archive',
        categoryDataAttr: 'indicator-category',
        targets: '.filter-target'
    });

    jQuery('#indicators-by-goal').on('change', function() {
        filter_indicators.filterCategory(jQuery(this).val());

        var goalTitle = jQuery("#indicators-by-goal option:selected").text();

        jQuery( '#goal-title' ).text( goalTitle  );



    });
</script>
<?php endif; ?>


</body>
</html>
