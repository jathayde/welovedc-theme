<div id="sidebar1" class="sidebar">

	<?php if(is_home()) { ?>
		<div id="dailyfeed" class="sidebar-section">
		<h2><span>The Daily Feed</span></h2>

		<?php query_posts('category_name=dailyfeed&showposts=10'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if (in_category('1')) : ?>
			<div class="post" id="post-<?php the_ID() ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="byline">
					By <?php the_author_link() ?>,
					<a href="<?php the_permalink() ?>"><?php the_time('g:i a F jS, Y') ?></a>
					<?php edit_post_link('<b>[edit]</b>','',''); ?>
				</div><!--/byline-->
				<div class="post-body">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div><!--/post-body-->

				<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>

			</div>
		<?php endif; endwhile; endif; ?>

		<p><a href="http://www.welovedc.com/category/dailyfeed/"><b>More from the Daily Feed &raquo;</b></a></p>

		</div><!--/dailyfeed-->
	<?php } elseif (is_single()) { ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="abouttheauthor" class="sidebar-section">
			<h2><span>About the Author</span></h2>
			<?php echo get_avatar( get_the_author_email(), '75' ); ?>
			<p><b><?php the_author_link(); ?>:</b> <?php the_author_description(); ?></p>
			<p><i>&raquo; Read more by <?php the_author_posts_link(); ?></i><br/>
<?php 
ob_start();
the_author_ID();
$AuthorID = ob_get_contents();
ob_end_clean();
?>
			<i><a href="<?php echo get_author_feed_link($AuthorID); ?>"><img src="/wp-content/themes/welovedc-theme/img/feed.png" alt="RSS" /><?php the_author(); ?>'s RSS feed</a></i></p>
		</div><!--/abouttheauthor-->

		<div id="articletools" class="sidebar-section">
			<h2><span>Article Tools</span></h2>
			<ul>
			<li id="tools-print"><a href="<?php the_permalink() ?>?print">Printable View</a></li>
			<li id="tools-email"><?php if(function_exists('wp_email')) { email_link(); } ?></li>
			<li id="tools-social"><?php if(function_exists('ilsb')){ilsb();} ?></li>
			</ul>
		</div><!--/articletools-->

		<div id="relatedposts" class="sidebar-section">
			<h2><span>Related Posts</span></h2>
			<?php if (function_exists('similar_posts')) similar_posts(); ?>
		</div><!--/relatedposts-->

		<?php endwhile; else: print ''; endif; ?>

	<?php } ?>

	<div id="recentposts" class="sidebar-section">
		<h2><span>Recent Posts</span></h2>
		<?php if (function_exists('recent_posts')) recent_posts(); ?>
	</div><!--/recentposts-->

	<div id="recentcomments" class="sidebar-section">
		<h2><span>Recent Comments</span></h2>
		<?php if (function_exists('recent_comments')) recent_comments(); ?>
	</div><!--/recentcomments-->

</div><!--/sidebar1-->

<div id="sidebar2" class="sidebar">

	<div id="photolab" class="sidebar-section">
		<div id="flickr"><a href="http://www.flickr.com/groups/welovedc/">flick<span>r</span></a></div>
		<h2><span>Photo Lab</span></h2>
		<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=10&display=latest&size=s&layout=x&context=in%2Fpool-welovedc%2F&source=group&group=712145%40N24"></script>
		<p><a href="http://www.flickr.com/groups/welovedc/"><img id="flickr_badge_icon" alt="items in We &amp;lt;3 DC" src="http://farm3.static.flickr.com/2263/buddyicons/712145@N24.jpg?1210011733" class="floatleft" /></a><a href="http://www.flickr.com/groups/welovedc/pool/">More in the<br /><b>We &lt;3 DC</b> pool</a></span></p>
		<div class="clear"> </div>

	</div>

	<div id="syndication" class="sidebar-section">
		<a href="/feed"><img src="/wp-content/themes/welovedc-theme/img/feed.png" alt="RSS" class="feed floatright" /></a>
		<h2><span>RSS Feeds</span></h2>
		<ul>
		<li><a href="/feed">Entries</a> <a href="/feed/atom">(Atom)</a></li>
		<li><a href="/comments/feed">Comments</a> <a href="/comments/feed/atom">(Atom)</a></li>
		</ul>
	</div>

	<div id="meta">
		<b>Meta:</b>
		<?php wp_register('',''); ?>
		<?php wp_loginout(); ?>
		<?php wp_meta(); ?>
	</div>

</div><!--/sidebar2-->
