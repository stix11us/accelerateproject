<?php
/**
 * Template Name: About Page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page" id="about">
	<div class="site-content">
			<div class='aboutpage-hero'>
				<p><a href="#">Accelerate</a> is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</p>
			</div>
	</div><!-- .container -->
</section><!-- .home-page -->

<?php the_content(); ?>


<div class="service_content">
	<?php while ( have_posts() ) : the_post();
		$description = get_field('description');
		$description_1 = get_field('description_1');
		$description_2 = get_field('description_2');
		$description_3 = get_field('description_3');
		$description_4 = get_field('description_4');
		$title_1 = get_field('title_1');
		$title_2 = get_field('title_2');
		$title_3 = get_field('title_3');
		$title_4 = get_field('title_4');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
		$image_4 = get_field('image_4');
		$size = get_field('full'); ?>

	<article class="about">
		<h4>Our Services</h4>
		<h6><?php echo $description; ?></h6>

		<div class="about-content">	
			<section class="section1">
				<?php echo wp_get_attachment_image ( $image_1, $size ); ?>
				<section class="description">
					<h2><?php echo $title_1; ?></h2>
					<p><?php echo $description_1; ?></p>
				</section>
			</section>
			
			<section class="section2">
				<?php echo wp_get_attachment_image ( $image_2, $size ); ?>
				<section class="description">
					<h2><?php echo $title_2; ?></h2>
					<p><?php echo $description_2; ?></p>
				</section>
			</section>
			
			<section class="section3">
				<?php echo wp_get_attachment_image ( $image_3, $size ); ?>
				<section class="description">
					<h2><?php echo $title_3; ?></h2>
					<p><?php echo $description_3; ?></p>
				</section>
			</section>
			
			<section class="section4">
				<?php echo wp_get_attachment_image ( $image_4, $size ); ?>
				<section class="description">
					<h2><?php echo $title_4; ?></h2>
					<p><?php echo $description_4; ?></p>
				</section>
			</section>
		</div>
	</article>
			<?php endwhile; // end of the loop. ?>
</div>



<div class="contact_button">
	<section class="contact_button">
		<p>Interested in working with us?</p>
		<a class="button" id="contact_button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	</section>
</div>

<section class="foot" id="foot">
	<?php get_footer();?>
</section>
