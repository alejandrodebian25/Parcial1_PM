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
						<span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<form>

            </form>
            
            <a href="<?= base_url(); ?>home/logout" class="btn btn-sm btn-outline-danger">Cerrar Sesion</a>

		</div>
	</div>
</nav>

<!-- <img src="<?=base_url('fotos/ale.jpg');?>" alt=""> -->
