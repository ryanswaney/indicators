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
            <?php the_field('footer_content', 'option'); ?>
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

<script>
  (function(d) {
    var config = {
      kitId: 'rty4qkt',
      scriptTimeout: 3000
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script> <!-- typekit -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34440011-5', 'auto');
  ga('send', 'pageview');

</script> <!-- ga -->


</body>
</html>
