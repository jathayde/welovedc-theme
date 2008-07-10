<?php get_header(); ?>
<div class="features">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="navigation">
	<div class="older"><?php previous_post_link('&laquo; %link') ?></div>
	<div class="newer"><?php next_post_link('%link &raquo;') ?></div>
</div>

<div class="clear"> </div>

<div class="post" id="post-<?php the_ID(); ?>">
	<h1><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	<div class="byline">
		By <?php the_author_link() ?>,
		<a href="<?php the_permalink() ?>"><?php the_time('g:i a F jS, Y') ?></a>
		<?php edit_post_link('<b>[edit]</b>','',''); ?>
	</div><!--/byline-->

	<div class="post-body">
		<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
	</div><!--/post-body-->

	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<div class="postmetadata">
		<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
	<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Both Comments and Pings are open ?>
					You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
	<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
	<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.
	<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.

	<?php } ?>

	</div><!--/postmetadata-->

	<?php comments_template(); ?>

</div><!--/post-->

<?php endwhile; else: ?>
<?php endif; ?>

</div><!--/features-->
<?php get_footer(); ?>