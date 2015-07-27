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
            <h4>About the Sustainable Development Solutions Network (SDSN)</h4>
			<p>Launched by UN Secretary-General Ban Ki-moon in August 2012, the Sustainable Development Solutions Network (SDSN) mobilizes scientific and technical expertise from academia, civil society, and the private sector in support of sustainable development problem solving at local, national, and global scales. We aim to accelerate joint learning and help to overcome the compartmentalization of technical and policy work by promoting integrated approaches to the interconnected economic, social, and environmental challenges confronting the world.</p>
            <p>Learn more at <a href="http://unsdsn.org">unsdsn.org</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<?php if ( is_post_type_archive( array( 'indicators', 'targets' ) ) ) : ?>
<script type="text/javascript">
    var filter_indicators = jQuery('#indicators-search').instaFilta({
        scope: '#main',
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
