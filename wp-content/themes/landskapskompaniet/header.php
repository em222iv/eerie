<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
<div class="navbar-wrapper">
    <div class="container" id="nav-container">
        <nav class="navbar navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="brand" href="<?php echo get_page_link(53); ?>">Landskapskompaniet</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
                    <ul class="nav navbar-nav navbar-inner">
                        <li><a href="<?php echo get_page_link(36); ?>">Kontakta oss</a></li>
                        <li><a href="<?php echo get_page_link(94); ?>">Galleri</a></li>
                        <li><a href="<?php echo get_page_link(92); ?>">Tjänster</a></li>
                        <li><a href="<?php echo get_page_link(2); ?>">Om oss</a></li>
                    </ul>
                    <div class="menu-social">
                    </div>
                </div>
            </div>
            <div id="flash-alert">

            </div>
        </nav>
    </div>
</div>

