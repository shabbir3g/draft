<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draft
 */

?>

	<footer class="footer-area"> 
		<div class="our-partnars"> 
			<div class="partnar-cont fadeInUp wow">

				<?php 
				 $footer_logo_01 =  get_option('footer-opt-val');

				 $flogo_01 = $footer_logo_01['floaoup01'];
				 if($flogo_01):  ?> 
					<div class="single-partner">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $flogo_01; ?>" alt="" /></a>
					</div>
				<?php endif; ?>


				<?php 
				 $footer_logo_02 =  get_option('footer-opt-val');

				 $flogo_02 = $footer_logo_02['floaoup02'];
				 if($flogo_02):  ?> 
					<div class="single-partner">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $flogo_02; ?>" alt="" /></a>
					</div>
				<?php endif; ?>


				<?php 
				 $footer_logo_03 =  get_option('footer-opt-val');

				 $flogo_03 = $footer_logo_02['floaoup03'];
				 if($flogo_03):  ?> 
					<div class="single-partner">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $flogo_03; ?>" alt="" /></a>
					</div>
				<?php endif; ?>



				<?php 
				 $footer_logo_04 =  get_option('footer-opt-val');

				 $flogo_04 = $footer_logo_04['floaoup04'];
				 if($flogo_04):  ?> 
					<div class="single-partner">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo $flogo_04; ?>" alt="" /></a>
					</div>
				<?php endif; ?>

			</div>
		</div>
		<div class="social-url fadeInDown wow"> 
			<ul>

				<?php  $instagram =  get_option('social-val');

				$ins = $instagram['ins'];
				if($ins):  ?> 
				<li><a href="<?php echo $ins;  ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="" /></a></li>
				<?php endif; ?>

				<?php  $linkedin = get_option('social-val');

				$lin = $linkedin['lin'];
				if($lin):  ?> 
				<li><a href="<?php echo $lin; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="" /></a></li>
				<?php endif; ?>

				<?php  $youtube = get_option('social-val');

				$yu = $youtube['yu'];

				if($yu):  ?> 
				<li><a href="<?php echo $yu; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="" /></a></li>
				<?php endif; ?>


				<?php  $twitter = get_option('social-val');
				$tw = $twitter['tw'];
				if($tw):  ?> 
				<li><a href="<?php echo $tw;  ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="" /></a></li>
				<?php endif; ?>

				<?php  $facebook = get_option('social-val');
				$fb = $facebook['fb'];
				if($fb):  ?> 
				<li><a href="<?php echo $fb; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="" /></a></li>
				<?php endif; ?>
				
				
				
			</ul>
		</div>
		
		<?php  $scroll_to_top = get_field('scroll_to_top','options');
		if($scroll_to_top):  ?> 
		<div class="totop"> 
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll-top.png" alt="" /></a> 
		</div>
		<?php endif; ?>

	</footer>
   
   <?php wp_footer(); ?>
  </body>
</html>