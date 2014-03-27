<!-- Footer -->
<div class="wrapper footer-wrapper">

<footer class="container">

	<div class="row">
		<div class="col-xs-5 col-xs-offset-1">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

		</div><!-- END Col -->
		<div class="col-xs-4 col-xs-offset-1">
			<p><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'Greenview Consulting' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?></p>
		</div><!-- END Col -->
	</div><!-- END Row -->

</footer>

</div> <!-- END Footer -->

<!-- GA -->

<!-- END GA -->

<script language="javascript">
	$('.carousel').carousel({
  		interval: 1000,
	})
</script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>


