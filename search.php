<?php get_header(); ?>
<div class="features">

<h2>Search Results</h2>


<?php if (have_posts()) : ?>

	<div class="navigation">
		<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h4 style="margin:0"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		<div class="byline">By <?php the_author_link() ?>, <a href="<?php the_permalink() ?>"><?php the_time('g:i a F jS, Y') ?></a></div>
		<i><?php the_excerpt(); ?></i>
		</div>

	<?php endwhile; ?>

	<div class="navigation">
		<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

<?php else : ?>

	<p>No posts found. Try a different search?</p>
<?php endif; ?>

	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</div><!--/features-->
<?php get_footer(); ?>