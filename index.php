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
				<div class="accordion" id="quienes-somos">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Quiénes somos
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#quienes-somos">
				    	<div class="card-body text-justify">
				        	Es una alianza creada para impulsar y afianzar la conexión con los clientes, porque consideramos que toda relación cliente-abogado es personal y de confianza, surgidas de la experiencia personal o recomendaciones, acorde a la eficiencia y eficacia en los servicios jurídicos prestados. Así se pensó en crear un espacio físico y web que permita mantener, proyectar, crear y mejora estas relaciones, mediante una comunicación permanente como fuente principal para el conocimiento de las necesidades del cliente.
				    	</div>
				    	<div class="text-center mb-3">
				   			<a href="<?php echo site_url('/quienes-somos')?>" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver más &raquo</a>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Miembros
				        </button>
				      </h2>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#quienes-somos">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Misión
				        </button>
				      </h2>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#quienes-somos">
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
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#quienes-somos">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="accordion" id="valores">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
				          Quiénes somos
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne" data-parent="#valores">
				    	<div class="card-body text-justify">
				        	Es una alianza creada para impulsar y afianzar la conexión con los clientes, porque consideramos que toda relación cliente-abogado es personal y de confianza, surgidas de la experiencia personal o recomendaciones, acorde a la eficiencia y eficacia en los servicios jurídicos prestados. Así se pensó en crear un espacio físico y web que permita mantener, proyectar, crear y mejora estas relaciones, mediante una comunicación permanente como fuente principal para el conocimiento de las necesidades del cliente.
				    	</div>
				    	<div class="text-center mb-3">
				   			<a href="<?php echo site_url('/quienes-somos')?>" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Ver más &raquo</a>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
				          Miembros
				        </button>
				      </h2>
				    </div>
				    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#valores">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
				          Misión
				        </button>
				      </h2>
				    </div>
				    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#valores">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
				          Visión
				        </button>
				      </h2>
				    </div>
				    <div id="collapseFour4" class="collapse" aria-labelledby="headingThree" data-parent="#valores">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr/>


<?php get_footer();?>
