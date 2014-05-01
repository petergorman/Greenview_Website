<?php get_header(); ?>

<div class="wrapper sub-section-wrapper">

	<div class="container">
	
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0">
			
			<h1><?php echo get_the_title(); ?></h1>
			
			</div> <!-- END Col -->
		</div> <!-- END Row -->
	</div>

	<div class="subpage-image" style="background-image:url(<?php the_field("subpage_hero"); ?>);"></div>

<section class="subpage container">

		<div class="spacer50"></div>
		
		<?php while(the_flexible_field("subpage_flexible_layout")): ?>
 
			<?php if(get_row_layout() == "full_width_text"): // layout: Full Width Text ?>
		 
			<div class="row">
				<div class="col-xs-12 col-xs-offset-0 subpage-row">
				
					<?php the_sub_field("text_content"); ?>
					
				</div> <!-- END Col -->
			</div> <!-- END Row -->
		 
			<?php elseif(get_row_layout() == "full_width_image"): // layout: Full Width Image
			
			// vars
			$image = get_sub_field('image');
			
			?>
		 
			<div class="row">
				<div class="col-xs-12 col-xs-offset-0 full-width-image subpage-row">
				
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" />
					
				</div> <!-- END Col -->
			</div> <!-- END Row -->
			
			<?php elseif(get_row_layout() == "2_column_layout"): // layout: 2 Column ?>
		 
			<div class="row">
				<div class="col-xs-8 col-xs-offset-0 subpage-row">
				
					<?php the_sub_field("left_column"); ?>
					
				</div> <!-- END Col -->
				
				<div class="col-xs-4 subpage-row">
				
					<?php the_sub_field("right_column"); ?>
					
				</div> <!-- END Col -->
			</div> <!-- END Row -->
			
			<?php elseif(get_row_layout() == "3_column_layout"): // layout: 3 Column ?>
		 
			<div class="row">
				<div class="col-xs-4 subpage-row">
				
					<?php the_sub_field("left_column"); ?>
					
				</div> <!-- END Col -->
				
				<div class="col-xs-4 subpage-row">
				
					<?php the_sub_field("middle_column"); ?>
					
				</div> <!-- END Col -->
				
				<div class="col-xs-4 subpage-row">
				
					<?php the_sub_field("right_column"); ?>
					
				</div> <!-- END Col -->
			</div> <!-- END Row -->
			
			<?php elseif(get_row_layout() == "divider"): // layout: 3 Column ?>
		 
			<div class="row">
				<div class="col-xs-12">
					<hr />
					<?php the_sub_field("hr"); ?>
					
				</div> <!-- END Col -->
			</div> <!-- END Row -->
		 
			<?php endif; ?>
		 
		<?php endwhile; ?>
		
		<div class="spacer40"></div>
		
	
</section>

</div>

<?php get_footer(); ?>