<?php
/*
Template Name: Archive Index Page
*/
?>

<?php get_header(); ?>
<div class="features">
<div class="post">

<h1><a href="/archives/">Archives</a></h1>

<h3>By Month:</h3>
<ul>
	<?php wp_get_archives('type=monthly'); ?>
</ul>

<h3>By Subject:</h3>
<ul>
	 <?php wp_list_categories(); ?>
</ul>

</div><!--/post-->
</div><!--/features-->
<?php get_footer(); ?>
