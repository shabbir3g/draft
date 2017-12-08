<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package draft
 */

get_header(); ?>

	<div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/03.jpg); "></div>
	<section id="hproduct" class="hproducts-section"> 
		<div class="container"> 
			<div class="all-hpro row">


			<?php  

			$product_blog = new WP_Query(array(
				'post_type'				=> 'post',
				'category__in' 			=> $categoryid,
			));

			while($product_blog->have_posts()): $product_blog->the_post();?>

				<div class="col-md-3 single-hpro"> 
					<div class="wow fadeInDown"> 
						<h2><a href="#"><?php the_title(); ?></a></h2>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="wow fadeInUp"> 
						<p><?php echo wp_trim_words(get_the_content(),18,'</p>
						<div class="readmore"> 
							<a href="'.get_the_permalink().'">Read More</a>
						</div>'); ?>
					</div>
				</div>

			<?php endwhile; ?>



			</div>
		</div>
	</section>
<?php

get_footer();
