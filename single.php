<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package draft
 */

get_header(); ?>

	
	<div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/03.jpg); "></div>
	<?php
		while ( have_posts() ) : the_post(); ?>
	<section id="hproduct" class="hproducts-section wow fadeInDown"> 
		<div class="container"> 
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="all-hpro row"> 
				<div class="col-md-4 single-hpro"> 
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="col-md-8 single-hpro"> 
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>


<?php
get_footer();
