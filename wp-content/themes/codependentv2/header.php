<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
//variables set for the site to use
	define( 'SITE_ROOT', get_option('home') . '/wp-content/themes/codependentv2/' );
	define( 'CO_ROOT', 'http://dev.codependentnews.com' ); 
	define('SITE_HOME', get_option('home') );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--[if lt IE 9]>
    	<script src="<?php echo SITE_ROOT; ?>assets/js/html5shiv.js"></script>
    <![endif]-->
	<title><?php if(is_home()):?><?php bloginfo('name'); ?><?else: ?><?php wp_title(' '); ?> | <?php bloginfo('name'); ?><?php endif;?></title> 
	<link rel="shortcut icon" href="<?php echo SITE_ROOT ?>images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo SITE_ROOT ?>dist/css/codependent.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<meta property="og:title" content="<?php if(is_home()):?><?php bloginfo('name'); ?><?elseif(is_category()):?><?php wp_title(''); ?><?else:?><?php the_title(); ?><?php endif;?>">
	<meta property="og:url" content="<?php if(is_home()):?><?php echo CO_ROOT ?><?else:?><?php the_permalink(); ?><?php endif;?>">
	<meta property="og:description" content="<?php if(is_home()):?><?php bloginfo('description'); ?><?php else:?><?php echo strip_tags(get_the_excerpt($post->ID)); ?><?php endif;?>">
	<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="<?php echo SITE_ROOT ?>assets/js/modernizr.min.js"></script>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="main-logo">
						<a href="<?php echo CO_ROOT ?>" title="The Co-Dependent"><img src="<?php echo SITE_ROOT ?>images/header-banner.png" alt="The Co-Dependent" class="center-block"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container margin-bottom-20"><!--closes in footer.php-->
		<div class="row">
			<nav id="main-nav" class="navbar navbar-default margin-0" role="navigation">
				<div class="navbar-header pull-left margin-left-15">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<?php
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse col-md-12 padding-top-10',
			        		'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
					<div class="social-media hidden-xs hidden-sm pull-right padding-top-15 text-right">
						<ul class="addthis_toolbox addthis_32x32_style addthis_default_style padding-0 list-unstyled list-inline">
							<li><a class="addthis_button_facebook_follow" addthis:userid="codependentnews"><i class="fa fa-facebook"></i></a></li>
							<li><a class="addthis_button_twitter_follow" addthis:userid="codependentnews"><i class="fa fa-twitter"></i></a></li>
							<li><a class="addthis_button_youtube_follow" addthis:userid="codependentnews"><i class="fa fa-youtube"></i></a></li>
							<li><a class="addthis_button_tumblr_follow" addthis:userid="codependentnews"><i class="fa fa-tumblr"></i></a></li>
							<li><a class="rss pull-left" href="<?php echo CO_ROOT?>feed" title="RSS Feed"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
