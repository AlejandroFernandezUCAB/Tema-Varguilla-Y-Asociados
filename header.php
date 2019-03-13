<!DOCTYPE html>
<html <?php languagues_attributes();?>>
<head>
    <meta charset="<?php bloginfo('chartset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>  
</head>
<body <?php body_class();?> >
    <header>
        		<!--Barra de navegacion-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
			<a class="navbar-brand" href="#">
				<img src="img/logo.png" class="d-inline-block align-top" width="35" height="35" alt="Imange de Varguilla">
				Varguilla y Asociados
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav nav-margen-derecho ml-auto ">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Quiénes Somos
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Nuestros miembros</a>
							<a class="dropdown-item" href="#">Nuestra historia</a>
							<a class="dropdown-item" href="#">Especializaciones</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Artículos
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Opinión</a>
							<a class="dropdown-item" href="#">Sentencias</a>
							<a class="dropdown-item" href="#">Laborales</a>
							<a class="dropdown-item" href="#">Novedades legales</a>
							<a class="dropdown-item" href="#">Recomendaciones legales</a>
							<a class="dropdown-item" href="#">Empresariales</a>
							<a class="dropdown-item" href="#">Derecho comparado</a>
							<a class="dropdown-item" href="#">Opinión</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contáctanos</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--Fin de barra de navegacion-->
    </header>