<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	<?php $counter = 0; ?>
	<div class="features">

		<?php query_posts('cat=-1&showposts=10'); ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php if (in_category('1')) continue; ?>
		<?php $counter++;
		if ($counter==1) {
			print "<div id='current' class='features'>\n";
			print "<h2 id='current-feature' class='feature-header'><span>Current Feature</span></h2>\n";
		} elseif ($counter==2) {
			print "<div id='older' class='features'>\n";
			print "<h2 id='older-features' class='feature-header'><span>Older Features</span></h2>\n";
		} ?>

			<div class="post" id="post-<?php the_ID() ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="byline">
					By <?php the_author_link() ?>,
					<a href="<?php the_permalink() ?>"><?php the_time('g:i a F jS, Y') ?></a>
					<?php edit_post_link('<b>[edit]</b>','',''); ?>
				</div><!--/byline-->

				<div class="post-body">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
			</div><!--/post-->

		<?php
		if ($counter==1) {
			print "</div><!--/current-->\n";
		} elseif ($counter==2) {
			print "</div><!--/older-->\n";
		} ?>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<p><a href="/archives/">&laquo; <b>More in the Archives</b></a></p>
	</div><!--/features-->
	<?php else : print ''; ?>

	<?php endif; ?>

<?php get_footer(); ?>
