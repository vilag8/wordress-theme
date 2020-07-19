<?php get_header(); ?>

<div class="single-content">

	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h1 class="content__title"><?php the_title(); ?></h1>

			<p><?php edit_post_link(); ?></p>

            <?php the_post_thumbnail('dev_big', array('class' => 'img-res','alt' => get_the_title())); ?>

			<?php the_content();?>

			<?php $post_tags = wp_get_post_tags($post->ID);
			if(!empty($post_tags)) {?>
				<p class="tag"> <small> <strong><?php esc_html_e('Tag: ', 'dev'); ?></strong>  </small> <br/> <?php the_tags('', ' ', ''); ?></p>
			<?php } ?>

        </article>
        <hr>

	<?php endwhile; else : ?>

	  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'dev'); ?> </h3>

	<?php endif; ?>

</div>
<div class="comments">
    <?php if(comments_open()){comments_template();}?>
</div>


<?php get_footer(); ?>