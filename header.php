<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

	<?php if ($_SERVER['QUERY_STRING'] == 'print') { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" type="text/css" media="screen" />
	<?php } else { ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php } ?>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>

</head>

<body>
<div id="container">

	<div id="banner">
		<div id="login">
		<?php global $userdata;
			get_currentuserinfo();
			if ($userdata->display_name) {
				printf("Logged in as %s", $userdata->display_name);
			} else {
				print "You are not currently logged in.";
			}
			print " [";
			wp_loginout();
			print "] ";
		?>

		</div><!--/login-->

		<div id="title"><a href="<?php echo get_option('home'); ?>/"><strong><?php bloginfo('name'); ?></strong></a></div>
		<div id="tagline"><em><?php bloginfo('description'); ?></em></div>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		<ul id="navbar"><?php wp_list_pages('title_li=&exclude=4601' ); ?></ul><!--/navbar-->

	</div><!--/banner-->

<div id="main">
<div id="content">