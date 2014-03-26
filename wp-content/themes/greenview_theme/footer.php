<!-- Footer -->
<div class="wrapper footer-wrapper">

<footer class="container">

	<div class="row">
		<div class="col-xs-5 col-xs-offset-1">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			<!--<ul>
				<li class="active"><p><a href="#" title="Home">Home</a></p></li>
				<li><p><a href="#" title="Basix">Basix</a></p></li>
				<li><p><a href="#" title="Section J">Section J</a></p></li>
				<li><p><a href="#" title="About">About</a></p></li>
				<li><p><a href="#" title="Contact">Contact</a></p></li>
			</ul>-->
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
  		interval: 1000
	})
</script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>


