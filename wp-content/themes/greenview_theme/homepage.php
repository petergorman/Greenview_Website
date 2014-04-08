<?php
/*
Template Name: Homepage
*/
?>

<?php get_header('home'); ?>


<!-- Carousel -->
<div class="wrapper gv-carousel">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner hero-block" style="background-image:url(<?php the_field('hero_bg_image'); ?>);">
    
	<?php if(get_field('hero_content')): ?>
	
	<?php while(has_sub_field('hero_content')): 
	
	// vars
	$image = get_sub_field('hero_image');
	
	?>
	
	<div class="item <?php the_sub_field('first_slide'); ?>">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
				
				<div class="div-table">
				
					<div class="hero-unit div-cell">
						<?php the_sub_field('hero_message'); ?>
					</div>
					
				</div> <!-- END Div Table -->
							
				</div> <!-- END Col -->
				
				<div class="col-xs-6">
				
				<div class="div-table">
				
					<div class="hero-unit div-cell">
						
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" />
						
					</div>
					
				</div> <!-- END Div Table -->
							
				</div> <!-- END Col -->
 			</div> <!-- END Row -->
		</div> <!-- END Container -->
		
    </div> <!-- END Item -->
	
	<?php endwhile; ?>
	 
	<?php endif; ?>


  </div> <!-- END Slide Wrapper -->

  <!-- Controls -->
  <a class="left carousel-control gv-carousel-control" href="#carousel-example-generic" data-slide="prev">
    <!--<i class="fa fa-angle-left"></i>--><img src="<?php bloginfo('template_directory');?>/img/left-arrow.png" width="15" height="49" alt="Left" />
  </a>
  <a class="right carousel-control gv-carousel-control" href="#carousel-example-generic" data-slide="next">
    <!--<i class="fa fa-angle-right"></i>--><img src="<?php bloginfo('template_directory');?>/img/right-arrow.png" width="15" height="49" alt="Right" />
  </a>
</div>

</div> <!-- END Carousel -->


<!-- About Section -->
<div class="wrapper about-section-wrapper">

<section class="container about">
	<div class="row">
		<div class="col-xs-12">
			
				<div class="row">
				
					<div class="col-xs-12 col-xs-offset-0">
						<h2><?php the_field('about_title'); ?></h2>
						<hr>
						<div class="hr-box col-xs-2 col-xs-offset-5"></div>
					</div> <!-- END Col -->
					
				</div> <!-- END Row -->
				
				<div class="row">
					
					<div class="col-xs-5 col-xs-offset-1">
						<?php the_field('left_list'); ?>
					</div> <!-- END Col -->
					
					<div class="col-xs-5 col-xs-offset-0">
						<?php the_field('right_list'); ?>
					</div> <!-- END Col -->
					
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						
						<?php if(get_field('about_logos')): ?>
						
						<ul class="images">
						<?php while(has_sub_field('about_logos')): 
						
							// vars
								$image = get_sub_field('logo_file');
						
						?>
						
							<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" /></li>
							
						<?php endwhile; ?>
						
						</ul>
						
						<?php endif; ?>
					</div> <!-- END Col -->
					
				</div> <!-- END Row -->
				<div class="spacer30"></div>
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						<a href="<?php the_field('about_button_link'); ?>" class="btn gv-btn gv-btn-more col-xs-12" title="<?php the_field('about_button_label'); ?>"><?php the_field('about_button_label'); ?></a>
					</div><!-- END Col -->
				</div><!-- END Row -->
				
			
		</div> <!-- END Col -->
 	</div> <!-- END Row -->
</section>

</div> <!-- END About Section -->


<!-- Basix / Section J Section -->
<div class="wrapper work-section-wrapper">

<section class="container work-section">

	<div class="row">
				
		<div class="col-xs-12 col-xs-offset-0">
			<h2><?php the_field('work_title'); ?></h2>
			<hr>
			<div class="hr-box col-xs-2 col-xs-offset-5"></div>
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->
		
	<div class="row">
	
		<div class="col-xs-1"></div>						
						
		<?php if(get_field('work_component')): ?>
		
		<?php while(has_sub_field('work_component')): 		
			// vars
			$image = get_sub_field('component_image');
		?>
		
		<div class="col-xs-5 col-xs-offset-0">	
			<h4><?php the_sub_field('component_title'); ?></h4>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" />
			<br>
			<a href="<?php the_sub_field('component_button_link'); ?>" class="btn gv-btn gv-btn-more col-xs-12" title="<?php the_sub_field('component_button_label'); ?>"><?php the_sub_field('component_button_label'); ?></a>
		</div> <!-- END Col -->
		
		<?php endwhile; ?>
		
		<?php endif; ?>
		
	</div> <!-- END Row -->	

</section>
<a id="quote"></a>
</div> <!-- END Basix / Section J Section -->



<!-- Quote Form -->
<div class="wrapper quote-section-wrapper">

<section class="container quote-section">

	<div class="row">
				
		<div class="col-xs-12 col-xs-offset-0">
			<h2><?php the_field('quote_title'); ?></h2>
			<hr>
			<div class="hr-box col-xs-2 col-xs-offset-5"></div>
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->
		
	<div class="row">
	
		<div class="col-xs-10 col-xs-offset-1">
		
		<?php the_field('quote_content'); ?>
		
			<hr class="hr-div col-xs-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		
			<div class="col-xs-2 col-xs-offset-9">
				<div class="spacer30"></div>
				<a href="#top" class="small align-right"><i class="fa fa-caret-up"></i> Back to top </a>
			</div> <!-- END Col -->
		
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->	

</section>

</div> <!-- END Quote Form -->


<?php get_footer(); ?>