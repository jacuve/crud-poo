<div class="box-principal">
<h3 class="titulo">Editar Seccion</h3>
<div class="panel panel-success">
	<div class="panel-heading">
		<div class="panel-title">Editar seccion <?php echo $datos['nombre']; ?></div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form class="form-horizontal" action="" method="POST">
					<div class="form-group">
						<label for="nombre" class="control-label">Nombre de la seccion</label>
						<input class="form-control" name ="nombre" value="<?php echo $datos['nombre']; ?>" type="text" required/>
					</div>
					<div class="form-group">
						<input class="form-control" name="id" value="<?php echo $datos['id']; ?>" type="hidden"/>
						<button type="submit" class="btn btn-success">Editar</button>
						<button type="reset" classÇ="btn btn-warning">Borrar</button>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
</div>