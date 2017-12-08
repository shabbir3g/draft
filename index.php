<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package draft
 */

get_header(); ?>

<div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/02.jpg); "></div>
	<section id="hproduct" class="pageproduct-section"> 
		<div class="container"> 
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

<?php

get_footer();
