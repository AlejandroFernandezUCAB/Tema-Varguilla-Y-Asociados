<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo('chartset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>  
</head>
<body <?php body_class();?> >
    <header>
        <!--Barra de navegacion-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
			<a class="navbar-brand" href="<?php echo site_url( )?>">
				<img src="<?php echo get_theme_file_uri('/images/logo.png')?>" class="d-inline-block align-top" width="35" height="35" alt="Imange de Varguilla">
				Varguilla y Asociados
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<?php
             wp_nav_menu( array(
	             'menu'              => 'primary',
	             'theme_location'    => 'headerMenuLocation',
	             'depth'             => 2,
	             'container'         => 'div',
	             'container_class'   => 'nav-margen-derecho ml-auto',
	             'container_id'      => '',
	             'menu_class'        => 'navbar-nav ',
	             'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	             'walker'            => new wp_bootstrap_navwalker())
	             );
        	?>
			</div>
		</nav>
		<!--Fin de barra de navegacion-->
    </header>