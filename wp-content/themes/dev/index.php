<?php get_header();?>

<div class="content clearfix">
	<div class="item-content">
		<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="anteprima-articolo">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_post_thumbnail('dev_single', array('class' => 'img-res','alt' => get_the_title())); ?>
				</div>

				<div class="details-article">
					<p> <?php the_time('j M Y') ?> - <span class='categories'><?php the_category(', '); ?></span></p>
					<?php the_excerpt();?>
				</div>
			</article>

		<?php endwhile; ?>

			<div class="pagination">
				<?php /* Pagination */
				global $wp_query;
				$big = 999999999; // need an unlikely integer
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );

				?>
			</div>
	</div>
	<?php else : ?>
	  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'dev'); ?> </h3>
	<?php endif; ?>

	<div class="sidebar">
		<?php get_sidebar();?>
	</div>
</div>

<?php get_footer();?>