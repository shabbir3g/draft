<?php
/**
 * Template Name: About Us Template
 */

get_header(); ?>


<?php $about_banner = get_field('about_banner'); 
if($about_banner): ?>

<div class="banner" style="background-image: url(<?php echo $about_banner['url']; ?>); "></div>

<?php endif; ?>


	<section id="hproduct" class="aboutus-section"> 
		<div class="container"> 
			<div class="all-hpro row"> 

				
				<div class="col-md-5 single-aboutus wow bounceInLeft"> 
					<?php $ab_top_image = get_field('ab_top_image'); 
					if($ab_top_image): ?>
					<img src="<?php echo $ab_top_image['url']; ?>" alt="" />
					<?php endif; ?>
				</div>
				
				<div class="col-md-7 single-aboutus wow bounceInRight">
					

					<?php $ab_top_content = get_field('ab_top_content'); 
					if($ab_top_content): ?>
					<?php echo  $ab_top_content; ?>
					<?php endif; ?>



				</div>
			</div>
		</div>
	</section>
	<section  class="aboutus-ccc fadeInDown wow"> 
		<div class="container"> 
			<div class="all-hpro row"> 
				<div class="col-md-12 single-aboutus">
					<?php $ab_bottom_content = get_field('ab_bottom_content'); 
					if($ab_bottom_content): ?>
					<?php echo  $ab_bottom_content; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>


	<?php get_footer(); ?>