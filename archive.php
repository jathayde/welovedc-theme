<?php get_header(); ?>
<div class="features">

<?php is_tag(); ?>
	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 		<?php /* If this is a category archive */ if (is_category()) { ?>
	<h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h3>Archive for <?php the_time('F jS, Y'); ?></h3>
 		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h3>Archive for <?php the_time('F, Y'); ?></h3>
 		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h3>Archive for <?php the_time('Y'); ?></h3>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h3>Author Archive</h3>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h3>Blog Archives</h3>
		<?php } ?>

	<div class="navigation">
		<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<div class="byline">
			By <?php the_author_link() ?>,
			<a href="<?php the_permalink() ?>"><?php the_time('g:i a F jS, Y') ?></a>
			<?php edit_post_link('<b>[edit]</b>','',''); ?>
		</div><!--/byline-->

		<div class="post-body">
		<?php the_content() ?>
		</div><!--/post-body-->

		<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
	</div><!--/post-->

	<?php endwhile; ?>

	<div class="navigation">
		<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

<?php else : ?>
<?php endif; ?>

</div><!--/features-->
<?php get_footer(); ?>