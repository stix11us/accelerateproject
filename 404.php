<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" class="contactus" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
			
				
				
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<section class="fourofour" 	style="margin:0 auto; width: 50%; text-align: center;">
	<img  src="http://cl.ly/image/1d1Y3I2w2035/404image.png"/>
	<section style="color:grey; ">
		<h2>Come on now!</h1>
		<p>This page doesn't exist.</p>
		<p>Go back or contact us for assistance.</p>
	</section>

</section>
		
		
	
<?php get_footer(); ?>