<?php
$secciones = $estudiantes->listarSecciones();
?>
<h3 class="titulo">Editar Estudiantes</h3>
<div class="panel panel-success">
	<div class="panel-heading">
		<div class="panel-title">Editar estudiante <?php echo $datos['nombre']; ?></div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>"/>
					</div>
				</div>

			</div>
			<div class="col-md-9">
				<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nombre" class="control-label">Nombre del estudiante</label>
						<input class="form-control" name ="nombre" value="<?php echo $datos['nombre']; ?>" type="text" required/>
					</div>
					<div class="form-group">
						<label for="edad" class="control-label">Edad</label>
						<input class="form-control" name="edad" value="<?php echo $datos['edad']; ?>" type="text" required/>
					</div>
					<div class="form-group">
						<label for="promedio" class="control-label">Promedio</label>
						<input class="form-control" name="promedio" value="<?php echo $datos['promedio']; ?>" type="text" required/>
					</div>

					<div class="form-group">
						<label for="seccion" class="control-label">Seccion (Seccion actual : <b><?php echo $datos['nombre_seccion']; ?></b>)</label>
						<select name="id_seccion" class="form-control">
							<?php while( $row =  mysqli_fetch_array($secciones)){?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
							<?php }?>
						</select>
					</div>


					<div class="form-group">
						<input class="form-control" name="id" value="<?php echo $datos['id']; ?>" type="hidden" />
						<button type="submit" class="btn btn-success">Editar</button>
						<button type="reset" classÇ="btn btn-warning">Borrar</button>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>