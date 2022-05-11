<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
	<title>Video Site</title>
    <?php wp_head(); ?>
</head>
<body>

<div class="container">
	<div class="header">
		<h1><a href="#" class="logo">Video Site</a></h1>

	        <?php
	        wp_nav_menu([
		        'theme_location'  => '',
		        'menu'            => '',
		        'container'       => 'nav',
		        'container_class' => 'site-menu',
		        'container_id'    => '',
		        'menu_class'      => 'main-menu',
		        'menu_id'         => '',
		        'echo'            => true,
		        'fallback_cb'     => 'wp_page_menu',
		        'before'          => '',
		        'after'           => '',
		        'link_before'     => '',
		        'link_after'      => '',
		        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		        'depth'           => 0,
		        'walker'          => '',
	        ]);
	        ?>
<!--        <nav>-->
<!--            <ul class="main-menu">-->
<!--                <li><a href="#">Главная</a></li>-->
<!--                <li><a href="#">Новости</a></li>-->
<!--                <li><a href="#">Видео</a></li>-->
<!--                <li><a href="#">Архив</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
	</div>