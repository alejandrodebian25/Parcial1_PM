<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Sistema- primer examen </a>
	<button
		class="navbar-toggler"
		type="button"
		data-toggle="collapse"
		data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent"
		aria-expanded="false"
		aria-label="Toggle navigation"
	>
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
		<div class="foto"></div>
		<div class="form-inline my-2 my-lg-0">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">
						<?php echo $nombre." ".$apellidos;?>
						<span class="sr-only">(current)</span></a
					>
				</li>
			</ul>
			<form action="<?= base_url(); ?>home/cambiarcolor" method="POST">
				<div class="form-group">
					<select
						class="form-control color"
						id="color"
						name="color"
						onchange="this.form.submit()"
					>
						<option value="#FFFFFF">Sel. Color</option>
						<option value="#1F618D">Azul</option>
						<option value="#E74C3C">Rojo</option>
						<option value="#16A085">Verde</option>
						<option value="#6C3483">Violeta</option>
						<option value="#1C2833 ">Negro</option>
					</select>
				</div>
			</form>

			<a
				href="<?= base_url(); ?>home/logout"
				class="btn btn-sm btn-outline-danger ml-2"
				>Cerrar Sesion</a
			>
		</div>
	</div>
</nav>

<div class="container mt-5">
	<div class="alert alert-light" role="alert">
		<h4 class="alert-heading">Bienvenido al sistema!</h4>
		<hr />
		<p>
			Genere un login por cada CI, ingresando a una pantalla de bienvenida (cuya
			cabecera indicara el nombre de su pagina, con una foto de usted con CSS) y
			un color por defecto (PHP), incluya select que tenga al menos tres
			colores..
		</p>
		<hr />
	</div>
</div>

<div class="d-flex flex-row-reverse bd-highlight">
<a href="<?=base_url('pregunta2');?>" type="button" class="btn btn-dark">Ir a la pregunta 2 >></a>
</div>
