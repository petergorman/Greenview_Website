<?php
/*
Template Name: Homepage
*/
?>

<?php get_header('home'); ?>


<!-- Carousel -->
<div class="wrapper gv-carousel">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner hero-block" style="background-image:url(<?php the_field('hero_bg_image'); ?>);">
    
	<?php if(get_field('hero_content')): ?>
	
	<?php while(has_sub_field('hero_content')): ?>
	
	<div class="item active">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-xs-offset-1">
				
				<div class="div-table">
				
					<div class="hero-unit div-cell">
						<?php the_sub_field('hero_message'); ?>
						<!--<h1>Get all your BASIX needs</h1>
						<h1>taken care of in one place</h1>
						<p>Greenview Consulting will rock your world blah blah, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
						<p><a href="#">More info</a></p>-->
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
    <i class="fa fa-angle-left"></i>
  </a>
  <a class="right carousel-control gv-carousel-control" href="#carousel-example-generic" data-slide="next">
    <i class="fa fa-angle-right"></i>
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
						<h2>Title about Greenview qualifications</h2>
						<hr>
						<div class="hr-box col-xs-2 col-xs-offset-5"></div>
					</div> <!-- END Col -->
					
				</div> <!-- END Row -->
				
				<div class="row">
					
					<div class="col-xs-5 col-xs-offset-1">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Praesent tincidunt orci in neque vehicula, blandit lobortis felis vulputate.</li>
							<li>Vestibulum ac turpis tincidunt, porttitor tortor vitae, ultrices mi.</li>
							<li>Donec imperdiet dui vitae risus gravida convallis.</li>
						</ul>
					</div> <!-- END Col -->
					
					<div class="col-xs-5 col-xs-offset-0">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Praesent tincidunt orci in neque vehicula, blandit lobortis felis vulputate.</li>
							<li>Vestibulum ac turpis tincidunt, porttitor tortor vitae, ultrices mi.</li>
							<li>Donec imperdiet dui vitae risus gravida convallis.</li>
						</ul>
					</div> <!-- END Col -->
					
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						
						<ul class="images">
							<li><img src="img/bdav.gif" width="101" height="120" alt="Building Designers Association Victoria" /></li>
							<li><img src="img/nationwide.gif" width="100" height="120" alt="Nationwide House Energy Rating Scheme" /></li>
							<li><img src="img/bers.gif" width="91" height="120" alt="BERS Pro 4.2" /></li>
						</ul>
					</div> <!-- END Col -->
					
				</div> <!-- END Row -->
				<div class="spacer30"></div>
				<div class="row">
					<div class="col-xs-6 col-xs-offset-3">
						<a href="#" class="btn gv-btn gv-btn-more col-xs-12" title="Learn more about Greenview Consulting">Learn more about Greenview Consulting</a>
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
			<h2>What Greenview Consulting do</h2>
			<hr>
			<div class="hr-box col-xs-2 col-xs-offset-5"></div>
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->
		
	<div class="row">
	
		<div class="col-xs-5 col-xs-offset-1">	
			<h4>BASIX</h4>
			<img src="http://placehold.it/396x250" alt="Basix" width="396" height="250" />
			<br>
			<a href="#" class="btn gv-btn gv-btn-more col-xs-12" title="More info">Click here for BASIX</a>
		</div> <!-- END Col -->
		
		<div class="col-xs-5 col-xs-offset-0">	
			<h4>Section J</h4>
			<img src="http://placehold.it/396x250" alt="Section J" width="396" height="250" />
			<br>
			<a href="#" class="btn gv-btn gv-btn-more col-xs-12" title="More info">Click here for Section J</a>
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->	

</section>

</div> <!-- END Basix / Section J Section -->



<!-- Quote Form -->
<div class="wrapper quote-section-wrapper">
<a id="quote"></a>
<section class="container quote-section">

	<div class="row">
				
		<div class="col-xs-12 col-xs-offset-0">
			<h2>Get a Quote Today!</h2>
			<hr>
			<div class="hr-box col-xs-2 col-xs-offset-5"></div>
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->
		
	<div class="row">
	
		<div class="col-xs-10 col-xs-offset-1">	
		
		<form role="form">
		
			<p>Complete the form below to recieve a no-obligation quote from Greenview Consulting, or <a href="#">contact a consultant</a></p>
			<hr class="hr-div col-xs-12">
			
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Contact Name</label>
					<input type="text" class="form-control gv-form-control gv-form-padding" id="exampleInputEmail2" placeholder="Please enter your full name">
				</div>
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Company Name</label>
					<input type="email" class="form-control gv-form-control gv-form-padding" id="exampleInputEmail2" placeholder="Please enter your company name">
				</div>
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Client Name</label>
					<input type="email" class="form-control gv-form-control gv-form-padding" id="exampleInputEmail2" placeholder="Please enter your client name">
				</div>
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Email address</label>
					<input type="email" class="form-control gv-form-control gv-form-padding" id="exampleInputEmail2" placeholder="Please enter your email address">
				</div>
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Phone</label>
					<input type="text" class="form-control gv-form-control gv-form-padding" id="exampleInputEmail2" placeholder="Please enter a contact number">
				</div>
				
				<div class="cf"></div>
				
				<hr class="hr-div col-xs-12">
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">What certificate are you after?</label>
					<select class="form-control gv-form-control">
						<option value="" disabled selected>Select a certificate</option>
					  	<option value="BASIX">BASIX</option>
					  	<option value="Section J">Section J</option>
					</select>
				</div>
				
				<div class="form-group col-xs-6">
					<label for="exampleInputEmail2">Upload plans?</label>
					<div class="col-sm-10">
						<button type="submit" class="btn btn-default">Browse for file</button>
					</div>
				</div>
				
				<div class="spacer40"></div>
			
			<a href="#" class="btn gv-btn gv-btn-quote col-xs-12" title="More info">Submit this quote</a>
			
		</form>
		
			<div class="col-xs-2 col-xs-offset-9">
				<div class="spacer30"></div>
				<a href="#top" class="small align-right"><i class="fa fa-caret-up"></i> Back to top </a>
			</div> <!-- END Col -->
		
		</div> <!-- END Col -->
		
	</div> <!-- END Row -->	

</section>

</div> <!-- END Quote Form -->


<?php get_footer(); ?>