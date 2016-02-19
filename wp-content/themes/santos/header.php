<!DOCTYPE html>
<html lang="en">
	<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<title><?php bloginfo('title'); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/owl-carousel/owl.carousel.css">
		 <!-- Default Theme -->
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<symbol id="icon-facebook2" viewBox="0 0 1024 1024">
					<title>facebook2</title>
					<path class="path1" d="M853.35 0h-682.702c-94.25 0-170.648 76.42-170.648 170.686v682.63c0 94.266 76.398 170.684 170.648 170.684h341.352v-448h-128v-128h128v-96c0-88.366 71.634-160 160-160h160v128h-160c-17.674 0-32 14.328-32 32v96h176l-32 128h-144v448h213.35c94.25 0 170.65-76.418 170.65-170.684v-682.63c0-94.266-76.4-170.686-170.65-170.686z"></path>
				</symbol>
				<symbol id="icon-instagram" viewBox="0 0 1024 1024">
					<title>instagram</title>
					<path class="path1" d="M854 0h-684c-93.5 0-170 76.5-170 170v684c0 93.5 76.5 170 170 170h684c93.5 0 170-76.5 170-170v-684c0-93.5-76.5-170-170-170zM327.8 448h368.4c6.988 20.058 10.8 41.59 10.8 64 0 107.524-87.476 195-195 195s-195-87.476-195-195c0-22.41 3.812-43.942 10.8-64zM896 448.050v383.95c0 35.2-28.8 64-64 64h-640c-35.2 0-64-28.8-64-64v-384h100.108c-4.642 20.602-7.108 42.016-7.108 64 0 160.458 130.542 291 291 291s291-130.542 291-291c0-21.984-2.464-43.398-7.108-64l100.108 0.050zM896 224c0 17.6-14.4 32-32 32h-64c-17.6 0-32-14.4-32-32v-64c0-17.6 14.4-32 32-32h64c17.6 0 32 14.4 32 32v64z"></path>
				</symbol>
				<symbol id="icon-twitter2" viewBox="0 0 1024 1024">
					<title>twitter2</title>
					<path class="path1" d="M853.342 0h-682.656c-93.874 0-170.686 76.81-170.686 170.69v682.624c0 93.936 76.812 170.686 170.686 170.686h682.656c93.876 0 170.658-76.75 170.658-170.69v-682.62c0-93.88-76.782-170.69-170.658-170.69zM766.478 381.48c0.252 5.632 0.38 11.296 0.38 16.988 0 173.51-132.070 373.588-373.584 373.588-74.15 0-143.168-21.738-201.276-58.996 10.272 1.218 20.724 1.84 31.322 1.84 61.518 0 118.134-20.992 163.072-56.21-57.458-1.054-105.948-39.020-122.658-91.184 8.018 1.532 16.244 2.36 24.704 2.36 11.976 0 23.578-1.61 34.592-4.61-60.064-12.066-105.326-65.132-105.326-128.75 0-0.554 0-1.104 0.012-1.652 17.7 9.834 37.948 15.742 59.47 16.424-35.232-23.546-58.414-63.736-58.414-109.292 0-24.064 6.476-46.62 17.78-66.010 64.76 79.44 161.51 131.712 270.634 137.19-2.238-9.612-3.4-19.632-3.4-29.924 0-72.512 58.792-131.298 131.304-131.298 37.766 0 71.892 15.944 95.842 41.462 29.908-5.886 58.008-16.814 83.38-31.862-9.804 30.662-30.624 56.394-57.732 72.644 26.56-3.174 51.866-10.232 75.412-20.674-17.594 26.328-39.854 49.454-65.514 67.966z"></path>
				</symbol>
				<symbol id="icon-tumblr2" viewBox="0 0 1024 1024">
					<title>tumblr2</title>
					<path class="path1" d="M853.38 0h-682.692c-93.878 0-170.686 76.814-170.686 170.686v682.626c0 93.938 76.808 170.688 170.686 170.688h682.692c93.87 0 170.62-76.75 170.62-170.688v-682.628c-0.008-93.87-76.758-170.684-170.62-170.684zM731.716 824.688c-30.152 14.188-57.528 24.188-82 29.938-24.496 5.69-50.96 8.558-79.402 8.558-32.312 0-51.376-4.058-76.188-12.188-24.808-8.188-46-19.872-63.5-34.872-17.558-15.128-29.686-31.198-36.466-48.194-6.784-17.004-10.156-41.692-10.156-74.004v-247.802h-95.996v-100.066c27.744-9 59.936-21.934 79.684-38.75 19.84-16.872 35.718-37.058 47.684-60.684 12.004-23.566 20.25-53.626 24.752-90.066h100.5v163.442h163.372v126.126h-163.378v181.188c0 41-0.528 64.626 3.816 76.25 4.312 11.56 15.126 23.56 26.902 30.5 15.656 9.376 33.504 14.060 53.626 14.060 35.786 0 71.378-11.626 106.75-34.876v111.44z"></path>
				</symbol>
			</defs>
		</svg>
		<header>
			<div class="header-inner">
				<a href="http://test.scientificmaps.com">
					<img src="<?php bloginfo('template_url');?>/images/header2.png" />
				</a>
				<?php wp_nav_menu( array( 
                  'theme_location'    => '',
                  'menu'            => 'HEADER_MENU',
                  'container'         => 'false',
                  'container_class'   => '',
                  'container_id'      => '',
                  'menu_class'        => 'text-nav',
                  'menu_id'           => '',
                  'echo'              => true,
                  'fallback_cb'       => 'wp_page_menu',
                  'before'            => '',
                  'after'             => '',
                  'link_before'       => '',
                  'link_after'        => '',
                  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'             => 0,
                  'walker'            => ''


                ));

                ?> 
				<!-- <nav class="text-nav">
					<ul>
						<li><a href="#">Events</a></li>
						<li><a href="news.html">News</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Venue</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav> -->
			</div> <!-- END OF HEADER INNER -->
		</header>
		<section id="body">