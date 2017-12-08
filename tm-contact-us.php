<?php
/**
 * Template Name: Contact Us Template
 */

get_header(); ?>




<?php $contact_banner = get_field('contact_banner'); 
if($contact_banner): ?>
<div class="banner" style="background-image: url(<?php echo $contact_banner['url']; ?>); ">
<?php endif; ?>
	
	<?php $banner_logo = get_field('banner_logo'); 
	if($banner_logo): ?>
	<a class="navbar-brand" href="<?php the_permalink(); ?>"><img src="<?php echo $banner_logo['url']; ?>" alt="" /></a>
	<?php endif; ?>
	</div>
	<section id="hproduct" class="contactus-section"> 
		<div class="container"> 
			<?php $contact_title = get_field('contact_title'); 
			if($contact_title): ?>
			<h2 class="fadeInDown wow"><?php echo $contact_title; ?><span>00966122873062</span></h2>
			<?php endif; ?>

			<div class="all-hpro row">
				<div class="col-md-5 single-contactus fadeInDown wow"> 
					<div class="contact-form"> 
					<?php $contact_form_shortcode = get_field('contact_form_shortcode'); 
					if($contact_form_shortcode): ?>


					<?php echo do_shortcode($contact_form_shortcode); ?>
					
					<?php endif; ?>

						
					</div>
				</div>
				<div class="col-md-7 single-contactus fadeInUp wow">

					<?php $contact_maps = get_field('contact_maps'); 
					if($contact_maps): ?>


					<?php echo do_shortcode($contact_maps); ?>
					
					<?php endif; ?>


				
				</div>
			</div>
		</div>
	</section>
	




	<?php get_footer(); ?>