<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package big-facet
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer center-content" role="contentinfo">
		<div class="site-info span6">
			<?php do_action( 'big_facet_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="scroll-top" class="pull-right"><a href="#back_to_top"><i class="icon-long-arrow-up"></i></a></div>

<?php wp_footer(); ?>

</body>
</html>