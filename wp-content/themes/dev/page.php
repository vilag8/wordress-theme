<?php /*Template Name: Paina standard */ get_header();?>

<div class="content-page">

	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<a href="<?php the_permalink(); ?>">
			  <?php the_post_thumbnail('dev_single', array('class' => 'img-res','alt' => get_the_title())); ?>
			</a>

			<?php the_content();?>

		</article>

		<?php endwhile; else : ?>

			<h3> <?php esc_html_e('Sorry, no posts matched your criteria.','miotema'); ?>  </h3>

		<?php endif; ?>
</div>
<?php get_footer();?>