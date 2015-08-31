<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<title><?php bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Swipe Menu SVG - by @eustachethomas</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

		<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?>>

<div class="menu">

    <div class="menu-inner">

<!--            <a href="#">Link 1</a>-->
<!--            <a href="#">Link 2</a>-->
<!--            <a href="#">Link 3</a>-->
            <?php

            $args = array(
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => 'nav',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'primary-menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            );

            wp_nav_menu( $args );

            ?>

    </div>

<svg class="bg" height="100%" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 640 1136">
    <path d="M0,0C0,0,0,1136,0,1136C0,1136,448,1136,448,1136C448,1136,448,0,448,0C448,0,0,0,0,0C0,0,0,0,0,0" fill="white"></path>
    <desc>Created with Snap</desc><defs></defs></svg>
</div>

<div class="content">
<!--    <div id="well">-->
<!--        <h4><strong id="slider" class="ui-draggable" style="position: relative; left: 0px;"></strong> <span>slide to unlock</span></h4>-->
<!--    </div>-->
    <header>
        <div class="slide_wrapper">
            <span class="text_mask"><b> M ⟩  </b></span>
        </div>

    <!--    <h1>Eerie </h1>-->
        <div class="logo">
            <img id="header-logo" src="<?php bloginfo('template_directory'); ?>/img/logo/black-logo.png" />
        </div>
        <div id="about">
            <p></p>
        </div>
    </header>


    <section>
        <ul class="chat-list">
            <li>
                <div class="message">
                    <div class="name">Header part</div>
                    <div class="response">This is where the header will go</div>
                </div>
            </li>
            <li>
                <div class="message">
                    <div class="name">About part</div>
                    <div class="response">Hi there !</div>
                </div>
            </li>
            <li>
                <div class="message">
                    <div class="name">Find us!</div>
                    <div class="response">Hi there !</div>
                </div>
            </li>
        </ul>
    </section>
</div>



