<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer">
		<div class="u-gridRow">	
			<div class="u-gridCol8">				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h5><?php the_title(); ?></h5>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol4">
				<h5>Stuur ons een bericht</h5>
				<?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>

			</div>				
		</div>
	</div>
<?php get_footer(); ?>
