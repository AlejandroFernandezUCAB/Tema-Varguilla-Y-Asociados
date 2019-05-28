<?php
	get_header();
	$inicio = 'index.php/';
?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active" style="background-image: url('<?php bloginfo( 'template_url')?>/images/slider1.jpg')">
			<div class="carousel-caption d-none d-md-block">
				<h5>Asesoría legal</h5>
					<p>Lorem ipsum dolor sit amet</p>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('<?php bloginfo( 'template_url')?>/images/slider2.png')">
			<div class="carousel-caption d-none d-md-block">
				<h5>Especializaciones</h5>
					<p>Lorem ipsum dolor sit amet</p>
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('<?php bloginfo( 'template_url')?>/images/slider3.png')">
			<div class="carousel-caption d-none d-md-block">
				<h5>Atención rápida y clara</h5>
					<p>Lorem ipsum dolor sit amet</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Siguiente</span>
	</a>
</div>

<!-- Page Content -->
<section class="">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 py-5">
				<h1 class="display-5 text-center">Varguilla y Asociados</h1>
			</div>

			<div class="col-lg-4 col-sm-12">
				<h3 class="text-center">Quiénes somos</h3>
				<div class="text-center">
					<p class="text-justify">
						Es una alianza creada para impulsar y afianzar la conexión con los clientes, porque consideramos que toda relación cliente-abogado es personal y de confianza, surgidas de la experiencia personal o recomendaciones, acorde a la eficiencia y eficacia en los servicios jurídicos prestados. Así se pensó en crear un espacio físico y web que permita mantener, proyectar, crear y mejora estas relaciones, mediante una comunicación permanente como fuente principal para el conocimiento de las necesidades del cliente.
					</p>
					<a class="btn btn-primary text-center" href="<?php echo site_url('quienes-somos')?>" role="button">Leer más &raquo</a>
				</div>

				
			</div>

			<div class="col-lg-4 col-sm-12">
				<h3 class="text-center">Nuestra organización</h3>
				<div class="accordion pt-3" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#misionOne" aria-expanded="true" aria-controls="mision1">
				          Misión
				        </button>
				      </h2>
				    </div>

				    <div id="misionOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Mi misión es orientar jurídicamente a las sociedades mercantiles y civiles en el desarrollo de sus actividades, con el fin de crearles estructuras afianzadas en la normativa vigente que permitan el crecimiento productivo y permanente de la organización. 
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#visionTwo" aria-expanded="false" aria-controls="visionTwo">
				          Visión
				        </button>
				      </h2>
				    </div>
				    <div id="visionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				        Ser la abogada de consulta por excelencia por mis sólidos y actualizados conocimientos jurídicos y por establecer relaciones empáticas con los clientes.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#valoresThree" aria-expanded="false" aria-controls="valoresThree">
				          Valores
				        </button>
				      </h2>
				    </div>
				    <div id="valoresThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body text-center">
				        <ul class="text-justify">
									<li>Empatía</li>
									<li>Honestidad</li>
									<li>Respeto</li>
									<li>Responsabilidad</li>
									<li>Confianza</li>
									<li>Entusiasmo</li>
									<li>Eficiencia y Eficacia</li>
									<li>Flexibilidad</li>
								</ul>
								
								<a class="btn btn-primary text-center" href="<?php echo site_url('valores')?>" role="button">Leer más &raquo</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<h3 class="text-center">Especializaciones</h3>
				<div class="text-center">
					<p class="text-justify">
						Es una alianza creada para impulsar y afianzar la conexión con los clientes, porque consideramos que toda relación cliente-abogado es personal y de confianza, surgidas de la experiencia personal o recomendaciones, acorde a la eficiencia y eficacia en los servicios jurídicos prestados. Así se pensó en crear un espacio físico y web que permita mantener, proyectar, crear y mejora estas relaciones, mediante una comunicación permanente como fuente principal para el conocimiento de las necesidades del cliente.
					</p>
					<a class="btn btn-primary text-center" href="<?php echo site_url('quienes-somos')?>" role="button">Leer más &raquo</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="jumbotron col-lg-6" style="background:transparent url(<?php echo get_theme_file_uri('images/buzon.jpeg')?>) no-repeat center  /cover; border-radius: 0">
				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="<?php echo site_url('contacto')?>" role="button">Contacto</a>
				</div>
			</div>
			<div class="jumbotron col-lg-6" style="background:transparent url(<?php echo get_theme_file_uri('images/fondo-mac.jpg')?>) no-repeat center  /cover;border-radius: 0">
				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="<?php echo site_url('contacto')?>" role="button">Regístrate</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-12" >
				<div class="row">
					<div class="col-lg-12 col-sm-12" >
						<h3 class="text-center pb-3">Servicios prestados</h3>
						<ul class="text-justify">
							<li>Asesoría Jurídica</li>
							<li>Elaboración de Dictamen y opiniones jurídicas</li>
							<li>Elaboración o revisión de Contratos</li>
							<li>Representación o Asistencia en órganos judiciales o Administrativos</li>
							<li>Asesoría en negociaciones colectivas de trabajo</li>
							<li>Gestiones y trámites administrativos</li>
							<li>Auditoria Laboral</li>
							<li>Auditoría General</li>
						</ul>
						<hr>
					</div>

					<div class="col-lg-12 col-sm-12 my-3">
    					<h3 class="text-center pb-3">Novedades legales</h3>
    					<ul>
								<?php $args = array(
										'posts_per_page'   => 10,
										'cat'         => '6',
										'orderby'          => 'date',
										'order'            => 'DESC',
										'post_type'        => 'post',
										'post_status'      => 'publish',
									);
									$posts_array = get_posts( $args );
									if(!empty($posts_array)){
										foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
											<li><a class="card-link" href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
										<?php endforeach;
										wp_reset_postdata();
									}else{
									?>
											<p>No se han agregado novedades legales</p>
									<?php
									}
								?>
							</ul>
							<hr>
    				</div>

    				<div class="col-lg-12 col-sm-12 my-3">
    					<h3 class="text-center pb-3">Preguntas frecuentes</h3>
  						<div class="accordion pt-3" id="accordionExample">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Miembros
						        </button>
						      </h2>
						    </div>

						    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Misión
						        </button>
						      </h2>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingThree">
						      <h2 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Visión
						        </button>
						      </h2>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>
						</div>
    				</div>

				</div>
    		</div>

    		<div class="col-lg-4 col-sm-12">
    		    	<div class="row">
    					<div class="col-lg-12 col-sm-12">
    						<h3 class="text-center pb-3">Artículos laborales</h3>

							<?php $args = array(
								'posts_per_page'   => 2,
								'cat'         => '5',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
							);
							$posts_array = get_posts( $args );
								if(!empty($posts_array)){
								foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
									<div class="card my-1">
										<div class="card-body">
											<h5 class="card-title"><?php the_title();?></h5>
												<p class="card-text text-justify"><?php echo get_the_excerpt()?></p>
												<div class="text-right">
												<a class="card-link" href="<?php the_permalink(); ?>">Leer más &raquo</a>
											</div>
										</div>
									</div>
								<?php endforeach;
									wp_reset_postdata();
								?>
								<div class="text-center">
									<a class="btn btn-primary text- my-3" href="<?php echo get_category_link(2);?>" role="button">Ver más artículos laborales &raquo</a>
								</div>
								<?php
							}else{
								?>
									<p class="text-center">No se han agregado articulos</p>
								<?php
								}
								?>
								<hr>
    					</div>

    					<div class="col-lg-12 col-sm-12">
    						<h3 class="text-center pb-3">Sentencias relevantes</h3>

							<?php $args = array(
								'posts_per_page'   => 2,
								'cat'         => '4',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
							);
							$posts_array = get_posts( $args );
							if(!empty($posts_array)){
								foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
									<div class="card my-1">
										<div class="card-body">
											<h5 class="card-title"><?php the_title();?></h5>
												<p class="card-text text-justify"><?php echo get_the_excerpt()?></p>
												<div class="text-right">
												<a class="card-link" href="<?php the_permalink(); ?>">Leer más &raquo</a>
											</div>
										</div>
									</div>
								<?php endforeach;
									wp_reset_postdata();
								?>
								<div class="text-center">
									<a class="btn btn-primary text- my-3" href="<?php echo get_category_link(5);?>" role="button">Ver más sentencias relevantes &raquo</a>
								</div>

								<?php
							}else{
								?>
									<p class="text-center">No se han agregado articulos</p>
								<?php
							}
								?>
								<hr>
    					</div>

    					<div class="col-lg-12 col-sm-12">
    						<h3 class="text-center pb-3">Derecho comparado</h3>

							<?php $args = array(
								'posts_per_page'   => 2,
								'cat'         => '3',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_type'        => 'post',
								'post_status'      => 'publish',
							);
							$posts_array = get_posts( $args );
							if(!empty($posts_array)){
							foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
								<div class="card my-1">
									<div class="card-body">
										<h5 class="card-title"><?php the_title();?></h5>
							    		<p class="card-text text-justify"><?php echo get_the_excerpt()?></p>
							    		<div class="text-right">
											<a class="card-link" href="<?php the_permalink(); ?>">Leer más &raquo</a>
										</div>
									</div>
								</div>
							<?php endforeach;
								wp_reset_postdata();
							?>
							<div class="text-center">
								<a class="btn btn-primary text- my-3" href="<?php echo get_category_link(5);?>" role="button">Ver más sentencias relevantes &raquo</a>
							</div>
							<?php
							}else{
							?>
								<p class="text-center">No se han agregado articulos</p>
							<?php
							}
							?>
    					</div>
							<hr>
    				</div>
    		</div>

    		<div class="col-lg-4 col-sm-12">
	    			<div class="row">
	    				<div class="col-lg-12 col-sm-12">
			    			<h3 class="text-center pb-3">Artículos de opinión</h3>
			    				<?php $args = array(
									'posts_per_page'   => 2,
									'cat'         => '2',
									'orderby'          => 'date',
									'order'            => 'DESC',
									'post_type'        => 'post',
									'post_status'      => 'publish',
								);
								$posts_array = get_posts( $args );
								if(!empty($posts_array)){
								foreach ( $posts_array as $post ) : setup_postdata( $post );
									//Pregunta si hay imagen miniatura para ver si colocarla o no
									if (has_post_thumbnail($post->ID)) {
										$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									}
								?>
								<div class="card my-1">
									<?php
										//Pregunta si hay imagen miniatura para ver si colocarla o no
										//Se recomiendan imagenes con 960x720
										if (has_post_thumbnail($post->ID)) {
										?>
											<img class="card-img-top" src="<?php echo $image[0]?>" alt="Card image cap">
										<?php
											}
										?>
									<div class="card-body">
										<h5 class="card-title"><?php the_title();?></h5>
										<p class="card-text text-justify"><?php echo get_the_excerpt()?></p>
										<div class="text-right">
											<a class="card-link" href="<?php the_permalink(); ?>">Leer más &raquo</a>
										</div>
									    <p class="card-text"><small class="text-muted"><?php the_time('N - j - Y')?></small></p>
									</div>
								</div>
								<?php endforeach;
									wp_reset_postdata();

								}else{
								?>
									<p class="text-center">No se han agregado articulos</p>
								<?php
								}
								?>
								<hr>
						</div>

						<div class="col-lg-12 col-sm-12 my-3">
			    			<h3 class="text-center pb-3">Proyectos</h3>
			    			<p class="text-justify">¿Deseas una interacción con un abogado referente a proyectos y emprendimientos?</p>
							<div class="text-center">
								<a class="btn btn-primary text-center" href="<?php echo site_url('proyectos')?>" role="button">Click aquí</a>
							</div>
							<hr>
						</div>

						<div class="col-lg-12 col-sm-12 my-3">
			    			<h3 class="text-center pb-3">Consultas</h3>
			    			<p class="text-justify">¿Deseas una interacción con un abogado referente a proyectos y emprendimientos?</p>
							<div class="text-center">
								<a class="btn btn-primary text-center" href="<?php echo site_url('consultas')?>" role="button">Click aquí</a>
							</div>
							<hr>
						</div>
					</div>

			</div>
		</div>
	</div>

</section>


<?php get_footer();?>
