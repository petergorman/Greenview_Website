<?php get_header(); ?>

<div class="wrapper sub-section-wrapper">

	<div class="subpage-image" style="background-image:url(http://localhost/GitHub/Greenview_Website/wp-content/uploads/2014/03/hero_stock.jpg);"></div>

<section class="subpage container">

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
		
		<h1><?php echo get_the_title(); ?></h1>
		<hr />
		<p><?php the_field('page_content'); ?></p>
		<div class="spacer60"></div>
		</div> <!-- END Col -->
	</div> <!-- END Row -->
	
</section>

</div>

<?php get_footer(); ?>