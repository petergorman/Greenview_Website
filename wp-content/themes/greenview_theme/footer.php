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
<script src="<?php bloginfo('template_directory');?>/includes/js/jquery-1.12.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory');?>/includes/js/scroller.js"></script>
<?php wp_footer(); ?>
</body>
</html>


