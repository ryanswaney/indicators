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

    var ex8 = jQuery('#ex8f').instaFilta({
        scope: '#ex8'
    });

    jQuery('#ex8s').on('change', function() {
        ex8.filterCategory(jQuery(this).val());
    });

</script>


</body>
</html>
