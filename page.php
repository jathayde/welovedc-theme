<?php get_header(); ?>
<div class="features">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p><?php edit_post_link('<b>[edit]</b>','',''); ?></p>

		<div class="post-body">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		</div></--post-->

		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	</div><!--/post-->

<?php endwhile; endif; ?>

</div><!--/features-->
<?php get_footer(); ?>