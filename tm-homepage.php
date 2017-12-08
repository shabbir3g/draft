<?php
/**
 * Template Name: Home Page Template
 */

get_header(); ?>


<?php $home_banner = get_field('home_banner'); 
if($home_banner): ?>
<div class="banner " style="background-image: url(<?php echo $home_banner['url']; ?>); background-position: left center;">
<?php endif; ?>
		<?php $home_banner_scroll = get_field('home_banner_scroll'); 
		if($home_banner_scroll): ?>
		 <span class="scroll-btn">
			<a href="#hproduct">
				<span class="mouse">
					<span>
					</span>
				</span>
			</a>
		  <a class="chev" href="#hproduct"><i class="fa fa-chevron-down"></i></a>

		</span>

		<?php endif; ?>
		
	</div>



	<?php $product_backgrond = get_field('product_backgrond'); 
	if($product_backgrond): ?>
	<section style="background-image: url(<?php echo $product_backgrond['url']; ?>); " id="hproduct" class="hproduct-section"> 
		<div class="container"> 

			<?php $porduct_section_title = get_field('porduct_section_title'); 
			if($porduct_section_title): ?>
			<h2 class="fadeInUp wow"><?php echo $porduct_section_title; ?></h2>
			<?php endif; ?>
			<div class="all-hpro row"> 
				

				<?php $tumi = get_terms('category'); 

				
				
				foreach( $tumi as $ami): 
					
					$catename = $ami->name;
					
					$category  = get_the_category( $post->ID );
					
					$categoryid = $ami->term_id;
					
					$category_image = get_field('category_image',"category_$categoryid");
					
					$catlink = get_category_link($categoryid);
					
					 ?>


				<div class="col-md-4 single-hpro">
					<div class="single-image rotateInDownLeft wow"> 
						<?php 
							if($category_image): ?>
						<a href="<?php echo $catlink; ?>"><img src="<?php echo $category_image['url']; ?>" alt="" /></a>
						<?php endif; ?>
					</div>
					<h3 class="fadeInUp wow"><a href="<?php echo $catlink; ?>"><?php echo $catename; ?></a></h3>
				</div>
				
			<?php
			endforeach;
				?>

			</div>
		</div>
	</section>
	<?php endif; ?>	


	<?php $welcome_section_background = get_field('welcome_section_background'); 
	if($welcome_section_background): ?>
	<section class="hdescript-section" style="background-image: url(<?php echo $welcome_section_background['url']; ?>); "> 
	<?php endif; ?>
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> 

					<?php $welcome_title = get_field('welcome_title'); 
					if($welcome_title): ?>
					<h2 class="rotateInDownLeft wow"><?php echo $welcome_title; ?></h2>
					<?php endif; ?>
					<div class="contenthp fadeInUp wow">


					<?php $welcome_description = get_field('welcome_description'); 
					if($welcome_description
						): 

						echo $welcome_description;

					 endif; ?>

					
					</div>

					<?php $welcome_button = get_field('welcome_button'); 
					if($welcome_button): ?>
					<div class="hpro_cta fadeInUp wow"> 
						<a href="<?php echo $welcome_button['url']; ?>"><?php echo $welcome_button['title']; ?></a>
					</div>
					<?php endif; ?>
				</div>
				
			</div>
		</div>
	</section>

	<section class="hdescript-section"> 
			<div class="all-hmachine"> 


				<?php $machinary = get_field('machinary'); 
					if($machinary): 


					foreach($machinary as $mach):	?>
				<div class="single-hmachine rotateInDownLeft wow"> 
					<img src="<?php echo $mach['image']['url'] ?>" alt="" />
					<div class="overlay"> 
						<h2><a href="#"><?php echo $mach['title']; ?></a></h2>
					</div>
				</div>
				
				<?php endforeach; endif; ?>




			</div>
	</section>
	<div class="draft-hmaps"> 


		<?php $home_maps = get_field('home_maps'); 
			if($home_maps): ?>


		<?php echo $home_maps; ?>


		<?php endif; ?>
		
	</div>
	<?php get_footer(); ?>