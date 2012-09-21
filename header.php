<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="girlWithColorfulLife" data-template-set="girl-with-colorful-life" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="rocketxujia">
	<meta name="Copyright" content="Copyright rocketxujia 2012. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/style.css">
	<!--<link rel="stylesheet" href="<?php /*bloginfo('stylesheet_url'); */?>">-->
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/css_browser_selector.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>


	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<header>
    <div class="header-c">
        <a class="logo" href="#">
            <img class="mine" alt="我的头像" src="http://girlwithacamera.co.uk/wp-content/themes/girl-with-a-camera/thumb.php?src=http://girlwithacamera.co.uk/wp-content/uploads/2012/09/DM4C7331.jpg&amp;w=112&amp;h=112&amp;zc=1&amp;q=95" />
            徐欣然的多彩生活
        </a>
        <!--<nav>
            <ul>
                <li id="nav-portfolio"><a href="#portfolio.girlwithacamera.co.uk/" title="" target="_blank">Portfolio</a></li>
                <li id="nav-shop"><a href="#ashleybaxter.bigcartel.com/" title="Shop for prints of my work" target="_blank">Shop</a></li>
                <li id="nav-twitter"><a href="#twitter.com/iamashley/" title="Follow me on Twitter" target="_blank">Twitter</a></li>
                <li id="nav-flickr"><a href="#flickr.com/photos/rockersdelight/" title="" target="_blank">Flickr</a></li>
            </ul>
        </nav>
        <div id="ad">
            <div id="bsap_1276652" class="bsap_1276652 bsap"><div class="bsa_it one"><div class="bsa_it_ad ad1 odd" id="bsa_-1"><a href="#stats.buysellads.com/click.go?z=1276652&amp;b=-1&amp;g=&amp;s=&amp;sw=1440&amp;sh=900&amp;br=chrome,21,win&amp;r=0.7334102250169963&amp;link=http://buysellads.com/buy/detail/69229/zone/1276652" onmouseover="window.status = 'http://buysellads.com/buy/detail/69229/zone/1276652'; return true;" onmouseout="window.status=''; return true;" target="_blank"><span class="bsa_it_i"><img src="http://s3.buysellads.com/r/d/adhere.png" width="180" height="130" alt="Advertise Here"></span></a><a href="#stats.buysellads.com/click.go?z=1276652&amp;b=-1&amp;g=&amp;s=&amp;sw=1440&amp;sh=900&amp;br=chrome,21,win&amp;r=0.277812457177788&amp;link=http://buysellads.com/buy/detail/69229/zone/1276652" onmouseover="window.status = 'http://buysellads.com/buy/detail/69229/zone/1276652'; return true;" onmouseout="window.status=''; return true;" target="_blank"><span class="bsa_it_t">Advertise Here</span><span class="bsa_it_d">Advertise in this spot with Online Advertising Marketplace</span></a><div style="clear:both"></div></div><span class="bsa_it_p"><a href="#buysellads.com/buy/detail/69229/zone/1276652?utm_source=site_69229&amp;utm_medium=website&amp;utm_campaign=imagetext&amp;utm_content=zone_1276652">ads by BSA</a></span></div></div>
        </div>-->
    </div>
</header>

